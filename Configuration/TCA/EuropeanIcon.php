<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_dstei2_domain_model_europeanicon'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_dstei2_domain_model_europeanicon']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, bezeichnung, isnotoriginal, originaltitel, bild, childof',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, bezeichnung, isnotoriginal, originaltitel, bild, childof, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_dstei2_domain_model_europeanicon',
				'foreign_table_where' => 'AND tx_dstei2_domain_model_europeanicon.pid=###CURRENT_PID### AND tx_dstei2_domain_model_europeanicon.sys_language_uid IN (-1,0)',
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

		'bezeichnung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_europeanicon.bezeichnung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'isnotoriginal' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_europeanicon.isnotoriginal',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'originaltitel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_europeanicon.originaltitel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bild' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_europeanicon.bild',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'bild',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'childof' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_europeanicon.childof',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dstei2_domain_model_europeanicon',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);
