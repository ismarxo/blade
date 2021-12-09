<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SectionBlog extends Controller {
    // BlogSimple    

    public static function getQuery($array, $int)
    {
        $result = [];
        $number = $int ? $int : 4;

        if($array) {
            $result = $array;
        } else {            
            $args = array( 'numberposts' => $number );
            $recent = wp_get_recent_posts( $args );
            foreach ($recent as $post) {
                $result[] = $post['ID'];
            }
        }

        return $result;
    }
  

    public static function getPostTags($id)
    {
        return $result;
    }    
}
