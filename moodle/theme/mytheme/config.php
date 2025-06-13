<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'mytheme';
$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->scss = function($theme) {
    return theme_mytheme_get_main_scss_content($theme);
};
$THEME->layouts = [
    'default' => [
        'file' => 'default',
        'regions' => [],
        'defaultregion' => '',
    ],
];
$THEME->enable_dock = false;
$THEME->supportscssoptimisation = false;
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->hidefromselector = false;
