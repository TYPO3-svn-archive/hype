<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'File',
	'Hype, Viewhelpers: File'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'GoogleVisualization',
	'Hype, Viewhelpers: Google Visualization'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'FacebookConnect',
	'Hype, Viewhelpers: Facebook Connect'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Math',
	'Hype, Viewhelpers: Math'
);

?>