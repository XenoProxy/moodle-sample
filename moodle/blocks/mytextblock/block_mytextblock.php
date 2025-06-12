<?php

defined('MOODLE_INTERNAL') || die();

class block_mytextblock extends block_base {

    public function init() {
        $this->title = get_string('mytextblock', 'block_mytextblock');
    }

    /**
     * Возвращает контексты, в которых блок может быть добавлен.
     *
     * @return array
     */
    public function applicable_formats() {
        return [
            'admin' => false,
            'site-index' => true,
            'course-view' => true,
            'mod' => true,
            'my' => true,
        ];
    }

    /**
     * Получает содержимое блока для отображения.
     *
     * @return stdClass
     */
     public function get_content() {
      global $OUTPUT;
      if ($this->content !== null) {
          return $this->content;
      }

      $this->content = new stdClass();
      
      $this->content->text .= '<p>' . get_string('hellomessage', 'block_mytextblock') . '</p>';
      $this->content->text .= '<p>' . get_string('simpledescription', 'block_mytextblock') . '</p>';
      $this->content->footer = '<p> footer </p>';    
      return $this->content;
    }
}