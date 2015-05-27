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

    public function onRun() {
        $this->settings = $this->page['settings'] = Settings::instance();
    }

}