<?php

namespace App\Model;

use Carbon_Fields\Field;

class PreviewSimple extends Section
{
    public static function getData()
    {
        $data = array(
            Field::make('separator', 'sep-pre-title', 'Предзаголовок'),
            Field::make('text', 'accent', 'Текст на красной подложке')
                ->set_width(30),
            Field::make('text', 'text', 'Обычный текст')
                ->set_width(70),
            Field::make('separator', 'sep-title', 'Заголовок'),
            Field::make('select', 'title-state', 'Статус заголовка')
                ->set_width(20)
                ->set_options(Section::getTags())
                ->set_default_value('div'),
            Field::make('textarea', 'title', 'Обычный текст')
                ->set_width(80),
            Field::make('separator', 'sep-wysiwyg', 'Контентная область'),
            Field::make('rich_text', 'wysiwyg', 'Обычный текст'),
            Field::make('complex', 'buttons', 'Ссылки и кнопки')
                ->add_fields(array(
                    Field::make('text', 'title', 'Текст'),
                    Field::make('image', 'image', 'Иконка'),
                    Field::make('text', 'link', 'Ссылка'),
                    Field::make('checkbox', 'color', 'Цветная кнопка?'),
                )),
            Field::make('image', 'image', 'Изображение'),
        );

        return $data;
    }
}
