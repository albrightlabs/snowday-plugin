<?php namespace Albrightlabs\SnowDay;

use Backend;
use System\Classes\PluginBase;

/**
 * snowday Plugin Information File
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
            'name'        => 'Snow Day',
            'description' => 'Adds support for quickly adding a "snow day" banner at the top of a website.',
            'author'      => 'Albright Labs LLC',
            'icon'        => 'icon-leaf'
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
     * Register settings
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Snow Day Banner',
                'description' => 'Manage the snow day banner display and message.',
                'category'    => 'system::lang.system.categories.cms',
                'icon'        => 'icon-comment',
                'class'       => 'Albrightlabs\SnowDay\Models\Settings',
                'order'       => 500,
                'keywords'    => 'snow day banner',
                'permissions' => ['albrightlabs.snowday.access_settings']
            ]
        ];
    }

    /**
     * Register components
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'AlbrightLabs\SnowDay\Components\SnowDay' => 'snowday'
        ];
    }
}
