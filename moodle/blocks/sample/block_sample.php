<?php

class block_sample extends block_base {

    /**
     * Initialises the block.
     *
     * @return void
     */
    public function init() {
        $this->title = get_string('sample', 'block_sample');
    }

    /**
     * Gets the block contents.
     *
     * @return string The block HTML.
     */
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';
        $this->content->text .= '<p>' . get_string('hellomessage', 'block_sample') . '</p>';
        $this->content->text .= '<p>' . get_string('simpledescription', 'block_sample') . '</p>';
        $this->content->footer = '';

        return $this->content;
    }
    

    /**
     * Defines in which pages this block can be added.
     *
     * @return array of the pages where the block can be added.
     */
    public function applicable_formats() {
        return [
            'admin' => true,
            'site-index' => true,
            'course-view' => true,
            'mod' => true,
            'my' => true,
        ];
    }
}