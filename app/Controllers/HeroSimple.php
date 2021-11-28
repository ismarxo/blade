<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class HeroSimple extends Controller {
    public static function getPreTitleAccentText()
    {
        return carbon_get_the_post_meta('');
    }

    public static function getPreTitleText()
    {
        return 'TEXT';
    }
}