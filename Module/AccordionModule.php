<?php

namespace Theme\Module;

use Sloth\Facades\Module as Module;

class AccordionModule extends Module {
    public static $layotter = [
        'title'       => 'Accordion',
        'description' => 'Fügt ein Accordion ein',
        'icon'        => 'align-justify',
        'field_group' => 'group_module_accordion',
    ];

    public function beforeRender() {
        $this->set('id', uniqid());
    }
}
