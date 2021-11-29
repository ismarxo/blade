<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Sections extends Controller
{
    public static function test() 
    {
        return [
            'hero'    =>  'image-right',
            'feature' =>  '2x2'
        ];
    }
}