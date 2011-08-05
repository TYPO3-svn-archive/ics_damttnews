<?php

$GLOBALS['T3_VAR']['ext']['ics_damttnews']['setup'] = unserialize($_EXTCONF);

t3lib_extMgm::addTypoScript($_EXTKEY,'setup','

includeLibs.imageMarkerFunc=EXT:ics_damttnews/imageMarkerFunc.php
plugin.tt_news.imageMarkerFunc = user_imageMarkerFunc

includeLibs.displayFileLinks = EXT:ics_damttnews/displayFileLinks.php
plugin.tt_news.itemMarkerArrayFunc = user_displayFileLinks

	',43);
?>
