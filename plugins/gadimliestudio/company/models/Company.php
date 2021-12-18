<?php namespace Gadimliestudio\Company\Models;

use Model;
/** *
*Company Model
 */
class Company extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $jsonable = [
      
      'support'

    ];   
    public $translatable = [
      'address',
      'excerpt',
      'about',
      'counters',
      'team',
      'docs',
      'faq'

    ];    

    public $settingsCode = 'gadimliestudio_company_settings';

    public $settingsFields = 'fields.yaml';

}
