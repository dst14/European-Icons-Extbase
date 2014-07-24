<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_dstei2_domain_model_vorkommen'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_dstei2_domain_model_vorkommen']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, seite, bild, buch, groesse, farbigkeit, beschnitt',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, seite, bild, buch, groesse, farbigkeit, beschnitt, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_dstei2_domain_model_vorkommen',
				'foreign_table_where' => 'AND tx_dstei2_domain_model_vorkommen.pid=###CURRENT_PID### AND tx_dstei2_domain_model_vorkommen.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'seite' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen.seite',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bild' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen.bild',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dstei2_domain_model_europeanicon',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'buch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen.buch',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dstei2_domain_model_schulbuch',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'groesse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen.groesse',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dstei2_domain_model_groesseninformationen',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'farbigkeit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen.farbigkeit',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dstei2_domain_model_farbigkeitsinformationen',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'beschnitt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen.beschnitt',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dstei2_domain_model_beschnittinformation',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),

	),
);
