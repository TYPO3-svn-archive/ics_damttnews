<?php

########################################################################
# Extension Manager/Repository config file for ext "ics_damttnews".
#
# Auto generated 05-08-2011 11:18
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'DAM tt_news',
	'description' => 'Adds DAM support for tt_news image and media',
	'category' => 'fe',
	'author' => 'In Cite Solution',
	'author_email' => 'technique@in-cite.net',
	'shy' => '',
	'dependencies' => 'dam,tt_news',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'dam' => '',
			'tt_news' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"67cc";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"5117";s:12:"ext_icon.gif";s:4:"1bdc";s:14:"ext_tables.php";s:4:"3b53";s:14:"ext_tables.sql";s:4:"f179";s:16:"locallang_db.xml";s:4:"8a36";s:19:"doc/wizard_form.dat";s:4:"06d1";s:20:"doc/wizard_form.html";s:4:"c782";s:36:"static/ics_dam_tt_news/constants.txt";s:4:"d41d";s:32:"static/ics_dam_tt_news/setup.txt";s:4:"d41d";}',
);

?>