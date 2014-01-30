<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'European Icons');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstei2_domain_model_europeanicon', 'EXT:dst_ei2/Resources/Private/Language/locallang_csh_tx_dstei2_domain_model_europeanicon.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstei2_domain_model_europeanicon');
$TCA['tx_dstei2_domain_model_europeanicon'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_europeanicon',
		'label' => 'bezeichnung',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'bezeichnung,isnotoriginal,originaltitel,childof,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/EuropeanIcon.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstei2_domain_model_europeanicon.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstei2_domain_model_schulbuch', 'EXT:dst_ei2/Resources/Private/Language/locallang_csh_tx_dstei2_domain_model_schulbuch.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstei2_domain_model_schulbuch');
$TCA['tx_dstei2_domain_model_schulbuch'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_schulbuch',
		'label' => 'titel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'titel,autoren,jahr,verlag,auflage,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Schulbuch.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstei2_domain_model_schulbuch.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstei2_domain_model_vorkommen', 'EXT:dst_ei2/Resources/Private/Language/locallang_csh_tx_dstei2_domain_model_vorkommen.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstei2_domain_model_vorkommen');
$TCA['tx_dstei2_domain_model_vorkommen'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_vorkommen',
		'label' => 'seite',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'seite,bild,buch,groesse,farbigkeit,beschnitt,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Vorkommen.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstei2_domain_model_vorkommen.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstei2_domain_model_farbigkeitsinformationen', 'EXT:dst_ei2/Resources/Private/Language/locallang_csh_tx_dstei2_domain_model_farbigkeitsinformationen.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstei2_domain_model_farbigkeitsinformationen');
$TCA['tx_dstei2_domain_model_farbigkeitsinformationen'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_farbigkeitsinformationen',
		'label' => 'farbigkeit',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'farbigkeit,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Farbigkeitsinformationen.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstei2_domain_model_farbigkeitsinformationen.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstei2_domain_model_beschnittinformation', 'EXT:dst_ei2/Resources/Private/Language/locallang_csh_tx_dstei2_domain_model_beschnittinformation.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstei2_domain_model_beschnittinformation');
$TCA['tx_dstei2_domain_model_beschnittinformation'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_beschnittinformation',
		'label' => 'beschnitt',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'beschnitt,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Beschnittinformation.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstei2_domain_model_beschnittinformation.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dstei2_domain_model_groesseninformationen', 'EXT:dst_ei2/Resources/Private/Language/locallang_csh_tx_dstei2_domain_model_groesseninformationen.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dstei2_domain_model_groesseninformationen');
$TCA['tx_dstei2_domain_model_groesseninformationen'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst_ei2/Resources/Private/Language/locallang_db.xlf:tx_dstei2_domain_model_groesseninformationen',
		'label' => 'standardgroessen',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'standardgroessen,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Groesseninformationen.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dstei2_domain_model_groesseninformationen.gif'
	),
);

?>