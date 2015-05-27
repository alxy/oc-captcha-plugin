<?php namespace Alxy\Captcha\Components;

use Cms\Classes\ComponentBase;
use Alxy\Captcha\Models\Settings;

class Captcha extends ComponentBase
{
    /**
     * Settings instance
     * @var Alxy\Captcha\Models\Settings
     */
    public $settings;

    /**
     * Returns details about this component.
     * 
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Captcha Component',
            'description' => 'Displays the reCATPCHA widget.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Prepares variables for the widget rendering
     */
    public function onRun() {
        $this->settings = $this->page['settings'] = Settings::instance();
    }

}