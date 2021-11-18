<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */
add_action( 'carbon_fields_register_fields', function () {
    // Your fields will go here.
});

/**
 * Boot Carbon Fields
 */
add_action( 'after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});

add_action( 'carbon_fields_register_fields', function () {
    /**
     * Footer Fields
     */
    Container::make( 'theme_options', 'Настройки шаблона' )
    ->add_tab( 'Header', array(
        Field::make( 'image', 'header__logo-simple-png', 'Логотип - обычный PNG' )
            ->set_width(50),   
        Field::make( 'image', 'header__logo-simple-svg', 'Логотип - обычный SVG' )
            ->set_width(50),          
        Field::make( 'text', 'header__accent-button-link', 'Ссылка акцентированной кнопки' )
            ->set_width(50),
        Field::make( 'text', 'header__accent-button-text', 'Текст акцентированной кнопки' )
            ->set_width(50)
    ) )
    ->add_tab( 'Footer', array(
        Field::make( 'text', 'footer__copyright', 'Текст копирайта' )
            ->set_default_value('© 2021 Все права защищены'),
        Field::make( 'text', 'footer__privacy-policy', 'Политика конфиденциальности' )
            ->set_default_value('Политика конфиденциальности')
    ) );
});