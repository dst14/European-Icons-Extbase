<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DanielStange.' . $_EXTKEY,
	'Eilistview',
	array(
		'EuropeanIcon' => 'list, show, new, create, edit, update, delete',
		'Schulbuch' => 'list, show, new, create, edit, update, delete',
		'Vorkommen' => 'list, show, new, create, edit, update, delete',
		'Farbigkeitsinformationen' => 'list, show, new, create, edit, update, delete',
		'Beschnittinformation' => 'list, show, new, create, edit, update, delete',
		'Groesseninformationen' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'EuropeanIcon' => 'create, update, delete',
		'Schulbuch' => 'create, update, delete',
		'Vorkommen' => 'create, update, delete',
		'Farbigkeitsinformationen' => 'create, update, delete',
		'Beschnittinformation' => 'create, update, delete',
		'Groesseninformationen' => 'create, update, delete',
		
	)
);

?>