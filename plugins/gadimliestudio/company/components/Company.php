<?php namespace Gadimliestudio\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Company\Models\Company as Settings;
use October\Rain\Database\Model;

class Company extends ComponentBase
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
        $company = new Model();
        $company->name = $settings->name;
        


        $company->documents = $settings->documents;

        $company->partners = $settings->partners;
        $company->about = $settings->about;
        $company->faq = $settings->faq;

        $company->excerpt = $settings->excerpt;
        $company->image = $settings->image;
        $company->dark_logo = $settings->dark_logo;
        $company->light_logo = $settings->light_logo;

        $company->video = $settings->video;
        $company->phone = $settings->phone;
        $company->email = $settings->email;
        $company->address = $settings->address;
        $company->gmaps = $settings->gmaps;
        $company->socials = $settings->socials;
        $company->counters = $settings->counters;
        $company->team = $settings->team;
        $company->docs = $settings->docs;
        $company->event = $settings->event;
        $company->homepage_banner_image = $settings->homepage_banner_image;
        $company->homepage_banner_animated_image = $settings->homepage_banner_animated_image;
        $company->homepage_solutions_text = $settings->homepage_solutions_text;
        $company->homepage_banner_text = $settings->homepage_banner_text;
        $company->system_software_docs = $settings->system_software_docs;

        $company->is_faq_active = $settings->is_faq_active;
        $company->solution_briefs = $settings->solution_briefs;
        
        $company->anniversary_pic = $settings->anniversary_pic;


        $company->testimonials = $settings->testimonials;

        $company->support = $settings->support;
        

        $company->coldchain_integrity_logo = $settings->coldchain_integrity_logo;


        $this->page['company'] = $company;
    }
}
