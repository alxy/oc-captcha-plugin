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
            'name' => 'Captcha',
            'description' => 'Integrates Googles reCAPTCHA into October.',
            'author' => 'Alxy',
            'icon' => 'icon-key'
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
                'label' => 'Captcha Settings',
                'description' => 'Manage reCAPTCHA API keys and settings.',
                'icon' => 'icon-key',
                'class' => 'Alxy\Captcha\Models\Settings',
                'keywords' => 'captcha reCAPTCHA google security form',
                'permissions' => ['alxy.captcha.access_settings'],
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

    /**
     * Registers component as a snippet to be used in Static Pages.
     * 
     * @return array
     */
    public function registerPageSnippets()
    {
        return [
           'Alxy\Captcha\Components\Captcha' => 'captcha'
        ];
    }

    /**
     * Registers administrator permissions for this plugin
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'alxy.captcha.access_settings' => ['tab' => 'Captcha', 'label' => 'Access Settings']
        ];
    }
}
