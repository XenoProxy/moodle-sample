<?php

require('../../config.php');
require_login();

$context = context_system::instance();
require_capability('local/helloworld:view', $context);

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/helloworld/index.php'));
$PAGE->set_title(get_string('pluginname', 'local_helloworld'));
$PAGE->set_heading(get_string('pluginname', 'local_helloworld'));

require_once(__DIR__ . '/classes/form/message_form.php');

$mform = new \local_helloworld\form\message_form();

if ($mform->is_cancelled()) {
    redirect(new moodle_url('/local/helloworld/index.php'));
} else if ($data = $mform->get_data()) {
    $record = (object)[
        'message' => $data->message,
        'timecreated' => time()
    ];
    $DB->insert_record('local_helloworld_messages', $record);
    redirect(new moodle_url('/local/helloworld/index.php'));
}

echo $OUTPUT->header();
$mform->display();

// fetch and display messages
$messages = $DB->get_records('local_helloworld_messages', null, 'timecreated DESC');
if ($messages) {
    echo html_writer::start_tag('ul');
    foreach ($messages as $msg) {
        echo html_writer::tag('li', format_string($msg->message));
    }
    echo html_writer::end_tag('ul');
}

echo $OUTPUT->footer();
