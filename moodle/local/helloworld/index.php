<?php

require('../../config.php');
require_login();

$context = context_system::instance();
require_capability('local/helloworld:view', $context);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/helloworld/index.php'));
$PAGE->set_title(get_string('pluginname', 'local_helloworld'));
$PAGE->set_heading(get_string('pluginname', 'local_helloworld'));

echo $OUTPUT->header();
echo $OUTPUT->box(get_string('hellomessage', 'local_helloworld'), 'generalbox');
echo $OUTPUT->footer();
