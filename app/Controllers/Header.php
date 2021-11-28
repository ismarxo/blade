<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Header extends Controller
{
    public static function isFrontPage() 
    {
        if(is_front_page()) {
            $result = '#';
        } else {
            $result = '/';
        }

        return $result;
    }

    public static function getHeaderLogoSrc()
    {      
        $field = carbon_get_theme_option( 'header__logo-simple-png' );
        $result = wp_get_attachment_image_url($field, 'full');
    

        return $result;
    }

    public static function getHeaderLogoAlt()
    {      
        $field = carbon_get_theme_option( 'header__logo-simple-png' );
        $result = get_post_meta($field, '_wp_attachment_image_alt', TRUE);        

        return $result;
    }

    public static function getAccentButtonLink()
    {      
        return carbon_get_theme_option( 'header__accent-button-link' );
    }

    public static function getAccentButtonText()
    {
        return carbon_get_theme_option( 'header__accent-button-text' );
    }
}
