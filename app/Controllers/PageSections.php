<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageSections extends Controller
{
    public static function getSections() 
    {   
        $result = [];
        $result['hero'] = carbon_get_theme_option('hero');
        $result['feature'] = carbon_get_theme_option('feature');
        $result['blog'] = carbon_get_theme_option('blog');

        // check variant of type 
        // if(false) {
            
        // } else {
        //     $result = [
        //         'placeholder'    =>  'simple',
        //     ];
        // }


        

        return $result;
    }
}