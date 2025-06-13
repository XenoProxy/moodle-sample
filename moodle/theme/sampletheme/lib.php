<?php
defined('MOODLE_INTERNAL') || die();

function theme_sampletheme_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $scss .= file_get_contents($CFG->dirroot . '/theme/sampletheme/scss/sampletheme.scss');  

    return $scss;
}
