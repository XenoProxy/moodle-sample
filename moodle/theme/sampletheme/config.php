<?php

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');

$THEME->name = 'sampletheme';
$THEME->parents = ['classic']; 
$THEME->version = 2025061300;
$THEME->extrascsscallback = 'theme_classic_get_extra_scss';
$THEME->prescsscallback = 'theme_classic_get_pre_scss';
$THEME->precompiledcsscallback = 'theme_classic_get_precompiled_css';

$THEME->sheets = ['sampletheme'];

$THEME->scss = function($theme) {
    return theme_sampletheme_get_main_scss_content($theme);
};

$THEME->rendererfactory = 'theme_overridden_renderer_factory';