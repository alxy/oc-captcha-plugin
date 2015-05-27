<?php

/**
 * Register the middleware to verify captchas
 */
Cms\Classes\CmsController::extend(function($controller) {
    $controller->middleware('Alxy\Captcha\Middleware\CaptchaMiddleware');
});