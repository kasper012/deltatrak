<?php namespace Gadimliestudio\Colors\Models;

use Model;
/** *
*Colors Model
 */
class Colors extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $jsonable = [
      
      'support',
      'system_software_docs',

    ];   
    public $translatable = [
      'address',
      'excerpt',
      'about',
      'counters',
      'team',
      'docs',
      'faq',
      'homepage_banner_text',
      'homepage_solutions_text',
      'support',
      'white_papers',
      'partners',
      'solution_briefs',
      'team',
      'event',
      'system_software_docs',
      'documents',
      'testimonials',
      'system_software_docs',

    ];    

    public $settingsCode = 'gadimliestudio_colors_settings';

    public $settingsFields = 'fields.yaml';

}
