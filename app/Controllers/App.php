<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function isSidebar()
    {
        return false;
    }

    public static function breadcrumbs()
    {
        $result = false;

        if (function_exists('yoast_breadcrumb')) {
            $result = yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
        }
        return $result;
    }

    public static function getWYSIWYG($string)
    {
        return apply_filters('the_content', $string);
    }

    public static function getAnalytics()
    {
        return carbon_get_theme_option('code__analytics');
    }

    public static function getHeaderTemplate($string)
    {
        if ($string) {
            if ($string == 'static') {
                return carbon_get_theme_option('header-static');
            }
            if ($string == 'fixed') {
                return carbon_get_theme_option('header-fixed');
            }
        } else {
            return 'simple';
        }
    }

    public static function getFooterTemplate()
    { 
        return carbon_get_theme_option('footer'); 
    }

    public static function getImageUrl($id, $size) 
    {
        if(!$size) $size = 'full'; 
        return wp_get_attachment_image_url($id, $size);
    }

    public static function getImageAlt($id) 
    {   
        $alt = get_post_meta($id, '_wp_attachment_image_alt', TRUE) ? get_post_meta($id, '_wp_attachment_image_alt', TRUE) : 'icon';
        return $alt;
    }
}
