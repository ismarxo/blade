<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageSections extends Controller
{
    public static function getSections() 
    {   
        $result = [];        
        $array = carbon_get_the_post_meta('sections_page');

        foreach ( $array as $item ) {
            $result[$item['_type']]['data'] = $item;
            $result[$item['_type']]['view'] = carbon_get_theme_option($item['_type']);
        }

        return $result;
    }
}