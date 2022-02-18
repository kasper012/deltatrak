<?php namespace Gadimliestudio\Colors\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Colors\Models\Colors as Settings;
use October\Rain\Database\Model;

class Colors extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Компания',
            'description' => 'Использовaние данных компании',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $colors = new Model();
        $colors->name = $settings->name;
        


        $colors->top_navbar = $settings->top_navbar;


        $colors->footer = $settings->footer;
        
        $colors->footer_second_color = $settings->footer_second_color;
        $colors->footer_second_color = $settings->footer_second_color;
        
        $colors->is_footer_gradient = $settings->is_footer_gradient;


        $this->page['colors'] = $colors;
    }
}
