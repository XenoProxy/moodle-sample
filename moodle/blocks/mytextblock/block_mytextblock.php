<?php

defined('MOODLE_INTERNAL') || die();

class block_mytextblock extends block_base {

    public function init() {
        $this->title = get_string('mytextblock', 'block_mytextblock');
    }

    /**
     * Определяет, должен ли блок отображаться в списке "Добавить блок".
     *
     * @return bool
     */
    public function is_empty() {
        return false;
    }

    /**
     * Определяет, может ли блок иметь несколько экземпляров на одной странице.
     *
     * @return bool
     */
    public function instance_allow_multiple() {
        return true; // Разрешаем добавлять несколько копий блока
    }

    /**
     * Возвращает контексты, в которых блок может быть добавлен.
     *
     * @return array
     */
    public function applicable_contexts() {
        // Этот блок может быть добавлен в любом контексте (система, курс, пользователь).
        return [
            CONTEXT_SYSTEM => true,
            CONTEXT_COURSE => true,
            CONTEXT_USER   => true,
        ];
    }

    /**
     * Определяет, есть ли у блока настройки экземпляра (через редактирование блока на странице).
     *
     * @return bool
     */
    public function instance_can_be_configurated() {
        // Этот блок не имеет настроек, поэтому возвращаем false.
        return false;
    }

    /**
     * Определяет, есть ли у блока глобальные настройки (через администрирование сайта).
     *
     * @return bool
     */
    public function has_config() {
        // Этот блок не имеет глобальных настроек, поэтому возвращаем false.
        return false;
    }

    /**
     * Получает содержимое блока для отображения.
     *
     * @return stdClass
     */
    public function get_content() {
        // Если содержимое уже установлено (например, при повторном вызове), просто возвращаем его.
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = ''; // Инициализируем текстовое содержимое
        $this->content->footer = ''; // Инициализируем нижний колонтитул

        // --- Здесь мы определяем текст, который будет отображаться в блоке ---
        $this->content->text .= '<p>' . get_string('hellomessage', 'block_mytextblock') . '</p>';
        $this->content->text .= '<p>' . get_string('simpledescription', 'block_mytextblock') . '</p>';
        // ------------------------------------------------------------------

        return $this->content;
    }
}