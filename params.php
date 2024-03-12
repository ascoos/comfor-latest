<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Comfor Latest Discussion
 * @subpackage         	: Parameters manager file (Administration Side only)
 * @source             	: /[BLOCKS PATH]/comfor-latest/params.php
 * @fileNo             	: 
 * @version            	: 1.0.1
 * @created            	: 2012-07-01 20:00:00 UTC+3 
 * @updated            	: 2024-03-12 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


global $ASCOOS;


function getComforBoards()
{
	global $my, $objDatabase;

	$where = [];
	$where[] = "groupid <= ".$my->groupid;
  	$where[] = "published=1";

	$query = "SELECT board_id, name, access, groupid"
		. "\nFROM #__comfor_boards"
	   	. (count( $where ) ? "\nWHERE " . implode( ' AND ', $where ) : "")
		. "\nORDER BY board_id ASC"
	;

	$objDatabase->setSQLQuery( $query ); 	// We query the database
	$rows = $objDatabase->getObjects(); 	// We get the result as an array of objects
	unset($where);


	// Get the table of discussion topics with the multilingual title corrected based on the current language.
	$arr = array();
	foreach ($rows as $row)	$arr[$row->board_id] = ascoos_langCorrectItem( $row->name, 'topic', true );

	unset($rows);
	return $arr;
}

$boards = getComforBoards();
$ASCOOS['extraParamFields']['ComforBoards'] = $boards;
$ASCOOS['extraParamFields']['ComforExceptBoards'] = $boards;
unset($boards);
?>