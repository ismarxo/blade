<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
   public static function getLink() 
   {
       if(is_front_page()) {
           $result = '#';
       } else {
           $result = '/';
       }

       return $result;
   }
}
