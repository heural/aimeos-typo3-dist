<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('aimeos_dist', 'Configuration/TypoScript', 'Aimeos Distribution');
