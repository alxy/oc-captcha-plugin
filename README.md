# October Captcha Plugin
Integrates Googles reCAPTCHA into October.

This plugin provides an easy way to secure any of your forms against bots - simply by adding a simple component anywhere in the form.
It uses Google's [reCAPTCHA](https://www.google.com/recaptcha/intro/index.html) and their PHP library to render the widget and verify the captcha.

> ##What is reCAPTCHA?
>
> reCAPTCHA is a free service to protect your website from spam and abuse. reCAPTCHA uses an advanced risk analysis engine and adaptive CAPTCHAs to keep automated software from engaging in abusive activities on your site. It does this while letting your valid users pass through with ease.
>
> reCAPTCHA offers more than just spam protection. Every time our CAPTCHAs are solved, that human effort helps digitize text, annotate images, and build machine learning datasets. This in turn helps preserve books, improve maps, and solve hard AI problems.
>
> <https://www.google.com/recaptcha/intro/index.html>

## Documentation

### Installation
In the OctoberCMS backend go to `Settings > Updates > Install plugins`, search for `Alxy.Captcha` and install the plugin.

You may alternatively use the command line and enter
```
$ php artisan plugin:install Alxy.Captcha
```
to install the plugin.

### Configuration
In the OctoberCMS backend go to `Settings > Captcha Settings`. You are required to enter a ``Site key`` and a ``Secret key`` there. Selecting a language is optional.
Please follow the instructions on that page in order to obtain these keys. You can also follow [this link](https://www.google.com/recaptcha/admin) to get directly to the reCAPTCHA administration page.

### Usage
Using the Captcha is as easy as possible:
Simply place the Captcha Component anywhere between ``<form>`` and ``</form>`` on your pages. Of course you can also use the Component on multiple pages. This will already render the captcha and your form is now secured against bots.

### Error handling
So what happens if a bot hits my form or a user fails on filling the captcha?
If the request is a regular (non-AJAX) request, it will simply redirect back. On top of that, the user input will be safed to the session and the error codes will be stored in the ``Flash`` storage. You may display these using the [{% flash %}-tag](http://octobercms.com/docs/markup/tag-flash).
Otherwise, if the form is submitted using AJAX, an ``AjaxException`` will be thrown. You can listen for the ``ajaxErrorMessage`` event to customize the error behavior.
