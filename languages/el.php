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
 * @subpackage         	: Greek Languages (el)
 * @source             	: /[BLOCKS PATH]/comfor-latest/languages/el.php
 * @fileNo             	: 
 * @version            	: 1.0.1
 * @created            	: 2012-07-01 20:00:00 UTC+3 
 * @updated            	: 2024-03-12 07:00:00 UTC+3
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
	public $blockname = "Τελευταία μηνύματα Forum";
	public $subject = "Θέμα Συζήτησης";
	public $poster = "Αποστολέας";
	public $board = "Νήμα Συζήτησης";
	public $date_message = "Ημερομηνία";
	public $today = "Σήμερα";
	

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "ΔΡΟΓΚΙΔΗΣ ΧΡΗΣΤΟΣ";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT ΛΟΓΙΣΜΙΚΟ";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Εμφανίζει ένα πλαίσιο που περιέχει τα τις τελευταίες δημοσιεύσεις στο forum.";
	

	public $APL_paramgroup_general_label = "▼ &nbsp; Επιλογές Γενικών Παραμέτρων";
	public $APL_paramgroup_general_label_info = "<strong>ΕΠΙΛΟΓΕΣ ΓΕΝΙΚΩΝ ΠΑΡΑΜΕΤΡΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να επιλέξετε από διάφορες γενικές παραμέτρους και να διαμορφώσετε δυναμικά την ενότητα";	
	public $APL_paramgroup_boards_label = "▼ &nbsp; Επιλογές Κατηγοριών Συζητήσεων";
	public $APL_paramgroup_boards_label_info = "<strong>ΕΠΙΛΟΓΕΣ ΚΑΤΗΓΟΡΙΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις παραμέτρους προέλευσης των περιεχομένων της ενότητας";
	


	public $APL_count_label = "Αριθμός Μηνυμάτων";
	public $APL_count_desc = "<strong>ΑΡΙΘΜΟΣ ΜΗΝΥΜΑΤΩΝ</strong><br />--------------------------------------<br /><br />Εδώ πρέπει να επιλέξετε τον αριθμό των θεμάτων που θα εμφανιστούν";

	public $APL_all_lang_label = "Εμφάνιση ανεξαρτήτως γλώσσας;";
	public $APL_all_lang_desc = "<strong>ΕΜΦΑΝΙΣΗ ΑΝΕΞΑΡΤΗΤΑ ΑΠΟ ΓΛΩΣΣΑ ΣΥΝΤΑΞΗΣ</strong><br />--------------------------------------<br /><br />Θέλετε να περιληφθούν όλα τα άρθρα, ανεξάρτητα από την γλώσσα που συντάχθηκαν;<br /><br />Αυτό θα έχει ως αποτέλεσμα να εμφανιστούν όλα τα άρθρα ανεξάρτητα από την γλώσσα σύνταξης τους.<br /><br />Για καλύτερη ενημέρωση στα αριστερά θα εμφανίζεται μια σημαία για να προσδιορίζει την γλώσσα σύνταξης.";

	public $APL_frontpage_label = "Σε ποιο Frontpage θα εμφανιστεί;";
	public $APL_frontpage_desc = "<strong>FRONTPAGE ΕΜΦΑΝΙΣΗΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε την θέση εμφάνισης του πλαισίου.<br /><br />Στην παρούσα έκδοση υποστηρίζονται μόνο 2 επιλογές θέσης.";
	public $APL_frontpage_placeholder = " Επιλέξτε το frontpage ";


	public $APL_theme_label = "Θέμα εμφάνισης Ενότητας";
	public $APL_theme_placeholder = "Επιλέξτε θέμα εμφάνισης της ενότητας";
	public $APL_theme_desc = "<strong>ΘΕΜΑ ΕΜΦΑΝΙΣΗΣ ΕΝΟΤΗΤΑΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε το θέμα εμφάνισης που θα υλοποιηθεί η ενότητα &laquo;%s&raquo;.<br /><br />Κάθε ενότητα έχει τουλάχιστο το προκαθορισμένο θέμα εμφάνισης με την ονομασία &laquo;Default&raquo;";

	
	public $APL_board_ids_label = "Κατηγορίες συζητήσεων που θα περιληφθούν";
	public $APL_board_ids_placeholder = "Επιλέξτε Κατηγορίες Συζητήσεων";
	public $APL_board_ids_desc = "<strong>ΚΑΤΗΓΟΡΙΕΣ ΠΟΥ ΘΑ ΠΕΡΙΛΗΦΘΟΥΝ</strong><br />--------------------------------------<br /><br />Ποιες κατηγορίες θέλετε να περιληφθούν;<br /><br />Αυτό θα έχει ως αποτέλεσμα μόνο τα άρθρα που έχουν μια από τις κατηγορίες αυτές να εμφανιστούν στην λίστα των πρόσφατων άρθρων.";
	public $APL_except_board_ids_label = "Κατηγορίες συζητήσεων που θα εξαιρεθούν";
	public $APL_except_board_ids_placeholder = "Επιλέξτε Κατηγορίες Συζητήσεων";
	public $APL_except_board_ids_desc = "<strong>ΚΑΤΗΓΟΡΙΕΣ ΠΟΥ ΘΑ ΕΞΑΙΡΕΘΟΥΝ</strong><br />--------------------------------------<br /><br />Ποιες κατηγορίες θέλετε να εξαιρεθούν;<br /><br />Αυτό θα έχει ως αποτέλεσμα να παρακαμφθούν όλα τα άρθρα που ανήκουν στις κατηγορίες αυτές.<br /><br />Η επιλογή αυτή αναιρεί την κατηγορία από την παραπάνω παράμετρο (περιλαμβανόμενες κατηγορίες), εάν δοθεί και σε αυτή.";

}
?>