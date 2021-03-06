<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$testElementIconFilePrefix = 'EXT:theme_test/Resources/Public/Icons/ContentElements/';
$t3kitElementIconFilePrefix = 'EXT:theme_t3kit/Resources/Public/Icons/ContentElements/';

if (TYPO3_MODE === 'BE') {
    /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    // iconTextColor
    $iconRegistry->registerIcon(
        'content-elements-iconTextColor',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => $t3kitElementIconFilePrefix  . 'element.svg'
        ]
    );

    // imageHeaderLink
    $iconRegistry->registerIcon(
        'content-elements-imageHeaderLink',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => $t3kitElementIconFilePrefix  . 'element.svg'
        ]
    );

    // iconHeader
    $iconRegistry->registerIcon(
        'content-elements-iconHeader',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => $t3kitElementIconFilePrefix  . 'element.svg'
        ]
    );

    // imageTextSections
    $iconRegistry->registerIcon(
        'content-elements-imagetextSection',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => $t3kitElementIconFilePrefix  . 'element.svg'
        ]
    );

    // contentCarousel
    $iconRegistry->registerIcon(
        'content-elements-contentCarousel',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => $t3kitElementIconFilePrefix  . 'element.svg'
        ]
    );
}
