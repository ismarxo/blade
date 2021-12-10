<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageSections extends Controller
{
    public static function getSections() 
    {   
        $result = [];        
        $array = carbon_get_the_post_meta('sections_page');

        foreach ( $array as $key => $item ) {
            $result[$key]['type'] = $item['_type'];            
            $result[$key]['view'] = carbon_get_theme_option($item['_type']);
            $result[$key]['data'] = $item;
        }

        return $result;
    }
}