<?php

########################################################################
# Extension Manager/Repository config file for ext "hype".
#
# Auto generated 30-11-2009 20:25
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Hype',
	'description' => 'Hype is the core extension on which all Hype extensions depend on. It provides a collection of global functions and implements TYPO3 specific configuration for better and easier usage of all installed Hype extensions.',
	'category' => 'misc',
	'author' => 'Thomas "Thasmo" Deinhamer',
	'author_email' => 'thasmo@gmail.com',
	'shy' => '',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.3.3',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-4.5.99',
			'extbase' => '1.2.0-0.0.0',
			'fluid' => '1.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"e9e5";s:32:"core/hooks/class.ux_t3lib_db.php";s:4:"8508";s:21:"core/library/file.php";s:4:"3328";s:25:"core/library/iterator.php";s:4:"bb95";s:22:"core/library/stack.php";s:4:"f86b";s:23:"core/library/string.php";s:4:"e4a7";s:43:"core/library/zend_framework/hype.plugin.php";s:4:"1fb3";s:42:"core/library/zend_framework/hype.table.php";s:4:"2837";}',
	'suggests' => array(
	),
);

?>