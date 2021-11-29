<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;



/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
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
    /**
     * Header and Footer Fields
     */
    Container::make('theme_options', 'Настройки шаблона')
        ->add_tab('Header', array(
            Field::make('image', 'header__logo-simple-png', 'Логотип - обычный PNG')
                ->set_width(50),
            Field::make('image', 'header__logo-simple-svg', 'Логотип - обычный SVG')
                ->set_width(50),
            Field::make('text', 'header__accent-button-link', 'Ссылка акцентированной кнопки')
                ->set_width(50),
            Field::make('text', 'header__accent-button-text', 'Текст акцентированной кнопки')
                ->set_width(50)
        ))
        ->add_tab('Footer', array(
            Field::make('text', 'footer__copyright', 'Текст копирайта')
                ->set_default_value('© 2021 Все права защищены'),
            Field::make('text', 'footer__privacy-policy', 'Политика конфиденциальности')
                ->set_default_value('Политика конфиденциальности')
        ));

    /**
     * Repeater Fields
     */
    
    $tags = array(
        'div'  => 'div',
        'h1'    => 'h1',
        'h2'    => 'h2',
        'h3'    => 'h3',
        'h4'    => 'h4',
        'h5'    => 'h5',
        'h6'    => 'h6',
    );

    $repeater = Field::make('complex', 'repeat_page', ' ');

    $sectionCollection = [];

    $heroSimple = array(
        Field::make('separator', 'sep-pre-title', 'Предзаголовок'),
        Field::make('text', 'accent', 'Текст на красной подложке')
            ->set_width(30),
        Field::make('text', 'text', 'Обычный текст')
            ->set_width(70),
        Field::make('separator', 'sep-title', 'Заголовок'),
        Field::make( 'select', 'title-state', 'Статус заголовка' )
            ->set_width(20)
            ->set_options( $tags )
            ->set_default_value( 'div' ),
        Field::make('textarea', 'title', 'Обычный текст')
            ->set_width(80),
        Field::make('separator', 'sep-wysiwyg', 'Контентная область'),
        Field::make('rich_text', 'wysiwyg', 'Обычный текст'),
        Field::make( 'complex', 'buttons', 'Ссылки и кнопки' )
            ->add_fields( array(
                Field::make( 'text', 'title', 'Текст' ),
                Field::make( 'image', 'image', 'Иконка' ),
                Field::make( 'text', 'link', 'Ссылка' ),
                Field::make( 'checkbox', 'color', 'Цветная кнопка?' ),
            ) ),
        Field::make( 'image', 'image', 'Изображение' ),
    );

    // get ActiveElements

    $sectionCollection = ['hero' =>  $heroSimple, 'hero2' =>  $heroSimple];

    foreach($sectionCollection as $key => $item) {
        $repeater = $repeater->add_fields($key, $key,$item);
    }

    // $elem2 = $repeater->add_fields('hero__image-right', 'Hero - Image Right', $heroSimple );
    // $elem2 = $elem2->add_fields('hero__image-2', 'Hero - Image Right2', $heroSimple );

    Container::make('post_meta', 'Настройки страницы конструктора')
        ->where('post_id', '=', get_option('page_on_front'))
        ->or_where('post_template', '=', '/resources/views/front-page.blade.php')
        ->add_fields(array( $repeater ));
});


