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
 * @subpackage         	: English Languages (en)
 * @source             	: /[BLOCKS PATH]/comfor-latest/languages/en.php
 * @fileNo             	: 
 * @version            	: 1.0.1
 * @created            	: 2012-07-01 20:00:00 UTC+3 
 * @updated            	: 2024-03-12 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @translator	       	:
 * @translatorSite     	:
 * @translatorCreated  	:
 * @translatedUpdated  	: 
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */
defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


class TBlock_comfor_latest_Language extends TObject
{
	public $blockname = "Latest Messages on Forum";
	public $subject = "Subject";
	public $poster = "Poster";
	public $board = "Board";
	public $date_message = "Date";
	public $today = "Today";	



	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "DROGIDIS CHRISTOS";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT SOFTWARE";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Displays a box containing the latest forum posts.";
	


	public $APL_paramgroup_general_label = "▼ &nbsp; General Configuration Options";
	public $APL_paramgroup_general_label_info = "<strong>GENERAL OPTIONS PARAMETERS</strong><br />--------------------------------------<br /><br />In this context you can choose from several general parameters and dynamically configure the block";
	public $APL_paramgroup_boards_label = "▼ &nbsp; Forum Categories Options";
	public $APL_paramgroup_boards_label_info = "<strong>CHOICES OF CATEGORIES</strong><br />--------------------------------------<br /><br />In this frame you can shape the parameters of origin of content of block";
	public $APL_count_label = "Number of forum topics";
	public $APL_count_desc = "<strong>NUMBER OF ARTICLES</strong><br />--------------------------------------<br /><br />Here you must select the number of articles that will appear";
	public $APL_all_lang_label = "Showing regardless of language";
	public $APL_all_lang_desc = "<strong>APPEARANCE INDEPENDENT BY LANGUAGE OF SYNTAX</strong><br />--------------------------------------<br /><br />Want to include all articles, independent from the language that was drawn up?<br /><br />This will result to display all articles regardless of language syntax.<br /><br />For more information, on the left, will display a flag to specify the language syntax.";


	public $APL_frontpage_label = "On which Frontpage will it appear?";
	public $APL_frontpage_desc = "<strong>FRONTPAGE ΕΜΦΑΝΙΣΗΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε την θέση εμφάνισης του πλαισίου.<br /><br />Στην παρούσα έκδοση υποστηρίζονται μόνο 2 επιλογές θέσης.";
	public $APL_frontpage_placeholder = " Select frontpage ";


	public $APL_theme_label = "Theme of appearance of Block";
	public $APL_theme_placeholder = "Select theme of appearance of block";
	public $APL_theme_desc = "<strong>THEME OF APPEARANCE OF BLOCK</strong><br />--------------------------------------<br /><br />Select the theme that will be implemented block &laquo;%s&raquo;.<br /><br />Each block has at least a predetermined theme, called &laquo;Default&raquo;";
	
	
	
	public $APL_board_ids_label = "Forum Categories that will be included";
	public $APL_board_ids_placeholder = "Select Forum Categories";
	public $APL_board_ids_desc = "<strong>CATEGORIES THAT WILL BE INCLUDED</strong><br />--------------------------------------<br /><br />Which categories do you want to include?<br /><br />This will result in only the articles have one of these categories appear in the list of recent articles.";
	public $APL_except_board_ids_label = "Forum Categories to be excluded";
	public $APL_except_board_ids_placeholder = "Select forum categories";
	public $APL_except_board_ids_desc = "<strong>CATEGORIES TO BE EXCLUDED</strong><br />--------------------------------------<br /><br />Which categories you want to exclude?<br /><br />This will lead to sidestep all the articles belong to these categories.<br /><br />This choice reverses the category from the above parameter (included categories), if it is also given in this.";

}
?>