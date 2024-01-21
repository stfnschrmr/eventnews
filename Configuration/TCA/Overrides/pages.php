<?php

defined('TYPO3') or die;

$typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getMajorVersion();

// Add eventnews icon
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = $typo3Version < 12 ? [
    0 => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_be.xlf:eventnews-folder',
    1 => 'eventnews',
    2 => 'apps-pagetree-folder-contains-eventnews',
] : [
    'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_be.xlf:eventnews-folder',
    'value' => 'eventnews',
    'icon' => 'apps-pagetree-folder-contains-eventnews',
];
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-eventnews'] = 'apps-pagetree-folder-contains-eventnews';
