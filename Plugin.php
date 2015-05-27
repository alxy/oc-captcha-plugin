<?php namespace Alxy\Captcha;

use System\Classes\PluginBase;

/**
 * Captcha Plugin Information File
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
            'name'        => 'Captcha',
            'description' => 'Integrates Googles reCAPTCHA into October.',
            'author'      => 'Alxy',
            'icon'        => 'icon-key'
        ];
    }

    /**
     * Registers settings for this plugin.
     * 
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Captcha Settings',
                'description' => 'Manage reCAPTCHA API keys and settings.',
                'icon'        => 'icon-key',
                'class'       => 'Alxy\Captcha\Models\Settings',
                'keywords'    => 'captcha reCAPTCHA google security form'
            ]
        ];
    }

    /**
     * Registers components for this plugin.
     * 
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Alxy\Captcha\Components\Captcha' => 'captcha'
        ];
    }

}
