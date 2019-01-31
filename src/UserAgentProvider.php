<?php

namespace WPKirk\UserAgent;

use WPKirk\UserAgent\MobileDetect\Mobile_Detect;

class UserAgentProvider
{
    static $instance;

    public static function init()
    {
        if (!self::$instance) {
            self::$instance = new Mobile_Detect();
        }

        return self::$instance;
    }
}