<?php
defined('MOODLE_INTERNAL') || die();

function theme_mytheme_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $scss .= file_get_contents($CFG->dirroot . '/theme/mytheme/scss/mytheme.scss');  

    return $scss;
}
