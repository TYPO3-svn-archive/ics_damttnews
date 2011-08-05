<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addStaticFile($_EXTKEY,'static/', 'ICS DAM tt_news');

$tempColumns = array (
	'tx_icsdamttnews_images' => txdam_getMediaTCA('image_field', 'tx_icsdamttnews_images'),	
	'tx_icsdamttnews_description' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:ics_damttnews/locallang_db.xml:tt_news.tx_icsdamttnews_description',
		'config' => array (
			'type' => 'user',
			'userFunc' => 'EXT:ics_damttnews/class.user_dam.php:user_class->userTCAformDAM',
			'noTableWrapping' => false,
			'readOnly' => true
		)
	),
	'tx_icsdamttnews_media' => txdam_getMediaTCA('media_field', 'tx_icsdamttnews_media')
);

//use tt_news l10n_mode_imageExclude settings
$confArr_ttnews = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['tt_news']);

$tempColumns['tx_icsdamttnews_images']['l10n_mode'] = ($confArr_ttnews['l10n_mode_imageExclude'] ? 'exclude' : 'mergeIfNotBlank');
$tempColumns['tx_icsdamttnews_images']['exclude'] = 1;
$tempColumns['tx_icsdamttnews_images']['label'] = 'LLL:EXT:ics_damttnews/locallang_db.xml:tt_news.tx_icsdamttnews_images';

$tempColumns['tx_icsdamttnews_media']['l10n_mode'] = 'mergeIfNotBlank';
$tempColumns['tx_icsdamttnews_media']['exclude']= 1;
$tempColumns['tx_icsdamttnews_media']['label'] = 'LLL:EXT:ics_damttnews/locallang_db.xml:tt_news.tx_icsdamttnews_media';

t3lib_div::loadTCA('tt_news');
t3lib_extMgm::addTCAcolumns('tt_news',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_news','tx_icsdamttnews_images;;;;1-1-1, tx_icsdamttnews_media');

$TCA['tt_news']['types']['0']['showitem'] = str_replace('image;', ' tx_icsdamttnews_images;', $TCA['tt_news']['types']['0']['showitem']);
$TCA['tt_news']['types']['1']['showitem'] = str_replace('image;', ' tx_icsdamttnews_images;', $TCA['tt_news']['types']['1']['showitem']);
$TCA['tt_news']['types']['2']['showitem'] = str_replace('image;', ' tx_icsdamttnews_images;', $TCA['tt_news']['types']['2']['showitem']);
$TCA['tt_news']['types']['0']['showitem'] = str_replace('news_files;', ' tx_icsdamttnews_media;', $TCA['tt_news']['types']['0']['showitem']);
$TCA['tt_news']['types']['1']['showitem'] = str_replace('news_files;', ' tx_icsdamttnews_media;', $TCA['tt_news']['types']['1']['showitem']);
$TCA['tt_news']['types']['2']['showitem'] = str_replace('news_files;', ' tx_icsdamttnews_media;', $TCA['tt_news']['types']['2']['showitem']);
?>