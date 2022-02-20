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
        $colors->is_footer_gradient = $settings->is_footer_gradient;
        $colors->footer = $settings->footer;
        $colors->footer_second_color = $settings->footer_second_color;
        $colors->products_list_background = $settings->products_list_background;

        

        
        $colors->title_on_colorful_background = $settings->title_on_colorful_background;
        $colors->main_text_color = $settings->main_text_color;
        $colors->links_color = $settings->links_color;
        $colors->footer_links_hover = $settings->footer_links_hover;
        $colors->button_background_color = $settings->button_background_color;
        $colors->button_color = $settings->button_color;
        $colors->icons_color = $settings->icons_color;





        $colors->products_bg = $settings->products_bg;
        $colors->support_bg = $settings->support_bg;
        $colors->warranty_bg = $settings->warranty_bg;
        $colors->software_bg = $settings->software_bg;
        $colors->validation = $settings->validation;
        $colors->calibration = $settings->calibration;
        $colors->calibration_17025 = $settings->calibration_17025;
        $colors->gogreen_bg = $settings->gogreen_bg;
        $colors->about_bg = $settings->about_bg;
        $colors->contact_bg = $settings->contact_bg;


        
        
        

        


        $this->page['colors'] = $colors;
    }
}
