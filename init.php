<?php

Cms\Classes\CmsController::extend(function($controller) {
    $controller->middleware('Alxy\Captcha\Middleware\CaptchaMiddleware');
});