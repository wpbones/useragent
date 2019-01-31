<?php

if (!function_exists('wpbones_user_agent')) {
    function wpbones_user_agent()
    {
        return WPKirk\UserAgent\UserAgentProvider::init();
    }
}