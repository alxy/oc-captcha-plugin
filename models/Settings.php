<?php namespace Alxy\Captcha\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'alxy_captcha_settings';

    public $settingsFields = 'fields.yaml';
}