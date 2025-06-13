<?php
defined('MOODLE_INTERNAL') || die();

function theme_mytheme_get_main_scss_content($theme) {
    return file_get_contents(__DIR__ . '/scss/styles.scss');
}
