<?php

namespace local_helloworld\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

class message_form extends \moodleform {
    public function definition() {
        $mform = $this->_form;

        $mform->addElement('text', 'message', get_string('entermessage', 'local_helloworld'));
        $mform->setType('message', PARAM_TEXT);
        $mform->addRule('message', null, 'required', null, 'client');

        $this->add_action_buttons(true, get_string('submit'));
    }
}
