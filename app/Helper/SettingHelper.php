<?php

namespace App\Helper;

class SettingHelper
{
    public static function getSetting()
    {
        $settings = \App\Models\SettingWebsite::get()->first();
        return $settings;
    }

}
