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
        $company->video = $settings->video;
        $company->phone = $settings->phone;
        $company->email = $settings->email;
        $company->address = $settings->address;
        $company->gmaps = $settings->gmaps;
        $company->socials = $settings->socials;
        $company->counters = $settings->counters;
        $company->team = $settings->team;
        $company->docs = $settings->docs;
        
        $company->is_faq_active = $settings->is_faq_active;


        $this->page['company'] = $company;
    }
}
