<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Sections extends Controller
{
    public static function test() 
    {
        return [
            'hero'    =>  'simple',
            'feature' =>  '2x2'
        ];
    }
}