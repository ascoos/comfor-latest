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
 * @subpackage         	: Main Frontend File
 * @source             	: /[BLOCKS PATH]/comfor-latest/index.php
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

global $core, $objLang, $cms_site, $my, $objDatabase, $ASCOOS, $frontpage, $cms_offset, $app;


$count 				= $block->getParam('int', 'count',10); 					// The number of messages to display
$all_lang			= $block->getParam('bool', 'all_lang', false ); 		// Include messages regardless of language?
$forum_frontpage	= $block->getParam('str', 'frontpage','fullpage' );		// The 2nd level template that will appear
$board_ids 			= $block->getParam('lstr', 'board_ids', '' );			// Only the discussion categories that will be displayed
$except_board_ids 	= $block->getParam('lstr', 'except_board_ids', '' );	// Categories of discussions to be excluded
$theme				= $block->getParam('str', 'theme','default' );			// The Block theme

// load Block Theme
$block->loadTheme($theme);

// We get the current day
$to_day = date("d-m-Y", time() + ($cms_offset * 60 * 60));

$where = [];

if (!$all_lang) {
	$where[] = "b.lang_id = ".$ASCOOS['lang']->id;
	$where[] = "m.lang_id = ".$ASCOOS['lang']->id;
}
if ($board_ids != '') $where[] = "b.board_id IN (".$board_ids.")";
if ($except_board_ids != '') $where[] = "b.board_id NOT IN (".$except_board_ids.")";
$where[] = "b.published=1";
$where[] = "b.groupid <= ".$my->groupid;
$where[] = "m.groupid <= ".$my->groupid;


$mwhere=array();
$mwhere[] = "m.groupid <= ".$my->groupid;

$query = "SELECT t.id, t.board_id, t.first_msg, t.last_msg, t.replies, m.subject as fsubject, b.name AS boardname"
		. "\n FROM #__comfor_topics AS t"
		. "\n LEFT JOIN #__comfor_msg AS m ON m.msg_id = t.first_msg"
		. "\n LEFT JOIN #__comfor_boards AS b ON b.board_id = t.board_id"
    	. (count( $where ) ? "\nWHERE " . implode( ' AND ', $where ) : "")
		. "\n ORDER BY t.last_msg DESC LIMIT ".$count.""
		;
$objDatabase->setSQLQuery( $query );
$topics = $objDatabase->getObjects();

if (count($topics)) {
?>
<div class="block-comfor-latest-<?php echo $theme; ?>">
	<table class="comfor-latest">
		<tr class="comfor-latest-header">
			<td colspan="2" class="comfor-latest-header border"><?php echo $block->getLangVar('subject'); ?></td>
			<td class="comfor-latest-header border"><?php echo $block->getLangVar('poster'); ?></td>
			<td class="comfor-latest-header border"><?php echo $block->getLangVar('board'); ?></td>
			<td class="comfor-latest-header border"><?php echo $block->getLangVar('date_message'); ?></td>
		</tr>

<?php
  $line = 1;

foreach ($topics as $topic)
{
		$msg_query = "SELECT m.id, m.topic_id, m.subject, m.poster_name, m.created, m.created_by, l.domain AS flag, u.id AS userid, u.username AS uname, u.groupid AS usergroup, ud.sex AS usersex, g.emphasis AS gemphasis, g.color AS gcolor"
			."\nFROM #__comfor_msg AS m"
			."\nLEFT JOIN #__languages AS l ON l.id = m.lang_id"
			."\nLEFT JOIN #__users AS u ON u.id = m.created_by"
			."\nLEFT JOIN #__users_details AS ud ON ud.id = u.id"
			."\nLEFT JOIN #__groups AS g ON g.id = u.groupid"
			."\nWHERE m.published=1"
			."\nAND m.groupid <= ".$my->groupid
			."\nAND m.msg_id='".$topic->last_msg."'"
			."\nORDER BY m.msg_id DESC"
			."\nLIMIT 1";
			$objDatabase->setSQLQuery( $msg_query );
			$msg = $objDatabase->getAssoc();


	$mblink = asc2seo("index.php?p=comfor&amp;t=topic&amp;id=".$topic->id."&amp;fp=".$forum_frontpage."")."#p".$topic->last_msg;	
	$sblink = asc2seo("index.php?p=comfor&amp;t=board&amp;id=".$topic->board_id."&amp;fp=".$forum_frontpage."");	  
	?>
    <tr class="<?php echo ($line == 0) ? "comfor-latest-row0" : "comfor-latest-row1"; ?> border">
    <td class="<?php echo ($topic->replies == 0) ? "comfor-latest-icon-new" : "comfor-latest-icon-update"; ?> border" valign="middle"></td>
	<td class="comfor-latest-subject border"><a href="<?php echo $mblink; ?>"><?php echo $topic->fsubject; ?></a></td>
	<td class="comfor-latest-poster border"><?php 
		if ( $msg['created_by'] > 0) {
			if ($msg['gemphasis'] == 1) $username = "<b>".$msg['uname']."</b>";
			else $username = $msg['uname'];
			$creator = "<font color=\"".$msg['gcolor']."\">".$username."</font>";
		} else {
			$creator = "<font color=\"#333333\"><strike>".$msg['poster_name']."</strike></font>";
		}
	echo $creator; ?></td>
	<td class="comfor-latest-board border"><a href="<?php echo $sblink; ?>"><?php echo ascoos_langCorrectItem($topic->boardname, 'topic', true); ?></a></td>

	<td class="comfor-latest-date border"><?php 
	$posterdate1 = date("H:i:s", $msg['created'] + ($cms_offset * 60 * 60));
	$posterdate = date("d-m-Y", $msg['created']+ ($cms_offset * 60 * 60));
	
	if ( strcmp($posterdate, $to_day) == '0') 
		echo "<b>".$block->lang->today."</b> ".$posterdate1."";
	 else 
		echo "".date('d-m-Y H:i:s', $msg['created']+ ($cms_offset * 60 * 60) ).""; 
	?></td>
	</tr>
	<?php 
	
	if ($line == 1) $line = 0;
	else $line = 1;
}
?>
</table>
</div>
<?php } else $block->clear(); ?>