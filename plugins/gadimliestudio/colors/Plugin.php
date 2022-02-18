<?php namespace Gadimliestudio\Colors;
use Backend;
use System\Classes\PluginBase;

/**
 * colors Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Colors',
            'description' => 'About colors',
            'author' => 'gadimliestudio',
            'icon' => 'icon-building',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Gadimliestudio\Colors\Components\Colors' => 'Colors',
        ];
    }

    public function registerSettings()
    {
        return [
            'colors' => [
                'label' => 'Colors',
                'description' => '',
                'category' => 'Gadimlie Studio',
                'class' => 'Gadimliestudio\Colors\Models\Colors',
                'order' => 100,
                'icon' => 'icon-paint-brush',
            ],
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'gadimliestudio.colors.some_permission' => [
                'tab' => 'colors',
                'label' => 'Some permission',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */

}
