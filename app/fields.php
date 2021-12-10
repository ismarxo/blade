<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 * 
 * name pattern:
 * 
 * block
 * block-name
 * block-name__child
 * block-name__child-name
 */
add_action('carbon_fields_register_fields', function () {
    // Your fields will go here.
});

/**
 * Boot Carbon Fields
 */
add_action('after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});

add_action('carbon_fields_register_fields', function () {
//options
    // ++require general
    // ++require main
    // require antispam
    // validate input
    // instagram settings
    // ++frontpage and repeater pages settings
    // ++header
    // head menu
    // catalog
    // custom text
    // taxonomies
    // ++footer
    // across banners
    // forms
    // general mobile
    // service tasks
//integrations


    // SET OPTION PAGES

    $basic_options_container = Container::make( 'theme_options', __( 'Template Options' ) )
        ->add_fields( array(
            Field::make('separator', 'blade-about',  __( 'Text about template' ) )
        ) );

    // Add new options pages under 'Basic Options':

    Container::make( 'theme_options', __( 'General options' ) )
        ->set_page_parent( $basic_options_container ) // reference to a top level container
        ->add_fields( array(
            Field::make('image', 'header__logo-simple-png', __( 'Logo PNG' ) )
            ->set_width(50),
                    
            Field::make('image', 'header__logo-simple-svg', 'Логотип - обычный SVG')
                ->set_width(50),
            Field::make( 'footer_scripts', 'code__analytics', __( 'Code of Analytics' ) )               
        ) );

    
    Container::make( 'theme_options', __( 'Customize options' ) )
        ->set_page_parent(  $basic_options_container ) // identificator of the 'Basic Options' admin section
        ->add_fields( array(
            Field::make( 'color', 'crb_background_color', __( 'Background Color' ) ),
            Field::make( 'image', 'crb_background_image', __( 'Background Image' ) ),
        ) );

    $sectionImagesUri = get_theme_file_uri().'/resources/assets/images/admin/sections';
    Container::make( 'theme_options', __( 'Sections options' ) )
        ->set_page_parent(  $basic_options_container ) // identificator of the 'Basic Options' admin section
        ->add_fields( array(
            Field::make( 'radio_image', 'hero', __( 'Hero Section' ) )
                ->set_options( array(
                    'simple' => $sectionImagesUri.'/hero/simple.png',                    
                ) )
                ->set_default_value('simple'),
            Field::make( 'radio_image', 'feature', __( 'Feature Section' ) )
                ->set_options( array(
                    'simple' => $sectionImagesUri.'/feature/simple.png',                    
                ) )
                ->set_default_value('simple'),
            Field::make( 'radio_image', 'blog', __( 'Blog Section' ) ) 
                ->set_options( array(
                    'simple' => $sectionImagesUri.'/blog/simple.png',                    
                ) )
                ->set_default_value('simple'),          
        ) );


    
    Container::make( 'theme_options', __( 'Header options' ) )
        ->set_page_parent(  $basic_options_container ) // identificator of the 'Basic Options' admin section
        ->add_fields( array(
            Field::make('text', 'header__accent-button-link', 'Ссылка акцентированной кнопки')
                ->set_width(50),
            Field::make('text', 'header__accent-button-text', 'Текст акцентированной кнопки')
                ->set_width(50)
        ) );

    
    Container::make( 'theme_options', __( 'Footer options' ) )
        ->set_page_parent(  $basic_options_container ) // identificator of the 'Basic Options' admin section
        ->add_fields( array(
            Field::make('text', 'footer__copyright', 'Текст копирайта')
                ->set_default_value('© 2021 Все права защищены'),
            Field::make('text', 'footer__privacy-policy', 'Политика конфиденциальности')
                ->set_default_value('Политика конфиденциальности')
        ) );
   





    /**
     * Temprary require sections fields
     */


    require_once('Model/Model.php');
    require_once('Model/Section/Section.php');
    

        
    /**
     * Repeater fields
     */   
    
    require_once('Model/Page/Sections.php');   

    require_once('Model/Post/Post.php');
});

// test
