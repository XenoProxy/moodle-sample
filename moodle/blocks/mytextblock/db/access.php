<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    // Возможность добавления экземпляра этого блока.
    // Это стандартная возможность, которую ДОЛЖНЫ определять ВСЕ блоки.
    'block/mytextblock:addinstance' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM, // Может быть добавлен на уровне сайта.
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW, // Учителя могут добавлять блоки на страницы курсов.
            'coursecreator' => CAP_ALLOW,
        ),
        'riskbitmask' => RISK_SPAM | RISK_XSS, // Стандартные риски для пользовательского контента.
    ),
);