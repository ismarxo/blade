<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SectionHero extends Controller {
    // HeroSimple
    public static function getButtonIcon($id) 
    {
        $src = wp_get_attachment_image_url($id);
        $alt = get_post_meta($id, '_wp_attachment_image_alt', TRUE) ? get_post_meta($id, '_wp_attachment_image_alt', TRUE) : 'icon';

        if($src) {
            $html = "<img src='{$src}' alt='{$alt}' class='inline-block mr-1 h-6 w-6'>";
        } else {
            $html = "";
        }

        return $html;
    }

    public static function getPicture($id) 
    {
        $src = wp_get_attachment_image_url($id, 'full');
        $alt = get_post_meta($id, '_wp_attachment_image_alt', TRUE) ? get_post_meta($id, '_wp_attachment_image_alt', TRUE) : 'icon';

        if($src) {
            $html = "<img src='{$src}' alt='{$alt}' class='min-h-full'>";
        } else {
            $html = "";
        }

        return $html;
    }
}
