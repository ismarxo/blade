<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SectionBlog extends Controller {
    // BlogSimple    

    public static function getQuery($array)
    {
        $result = [];

        if($array) {
            $result = $array;
        } else {
            
        }

        return $result;
    }

    public static function getPostLink($id)
    {        
        return get_the_permalink( $id );
    }

    public static function getPostThumbnailAttributes($id)
    {
        $size = 'full';
        $src = get_the_post_thumbnail_url( $id, $size );
        $alt = get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', TRUE) ? get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', TRUE) : get_the_title($id);

        if($src) {
            $html = "src='{$src}' alt='{$alt}'";
        } else {
            $html = "alt='{$alt}'";
        }

        return $html;
    }

    public static function getPostDate($id)
    {
        return get_the_date('', $id);
    }

    public static function getPostTitle($id)
    {
        return get_the_title($id);
    }

    public static function getPostExcerpt($id)
    {
        $result = '';
        $charlength = 130;
        $announcement = carbon_get_post_meta($id, 'announcement');

        if($announcement) {
            $result = $announcement;
        } else {
            $excerpt = get_the_excerpt();
            $charlength++;

            if ( mb_strlen( $excerpt ) > $charlength ) {
                $subex = mb_substr( $excerpt, 0, $charlength - 5 );
                $exwords = explode( ' ', $subex );
                $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
                if ( $excut < 0 ) {
                   $result = mb_substr( $subex, 0, $excut );
                } else {
                    $result = $subex;
                }
                $result .= '...';
            } else {
                $result = $excerpt;
            }
        }

        return $result;
    }

    public static function getPostTags($id)
    {
        return $result;
    }

    public static function getCategoryNameById($id)
    {
        return $result;
    }
}
