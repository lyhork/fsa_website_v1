<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

function getCustomLocalizedURL($localeCode, $url = null, $attributes = [], $forceDefaultLocation = true)
{
    // Get the localized URL
    $localizedURL = LaravelLocalization::getLocalizedURL($localeCode, $url, $attributes, $forceDefaultLocation);

    // Force HTTPS by replacing http with https
    return preg_replace("/^http:/i", "https:", $localizedURL);
}
