<?php

namespace App\Model;

use Carbon_Fields\Field;

class BlogSimple extends Section
{
    public static function getData()
    {
        $data = array(
            Field::make('separator', 'title__separator', __( 'Title') ),
            Field::make('select', 'title__status', __( 'Title status') )
                ->set_width(20)
                ->set_options(Section::getTags())
                ->set_default_value('div'),
            Field::make('textarea', 'title', __( 'Title' ) )
                ->set_width(80),
            Field::make('separator', 'wysiwyg__separator', __( 'Content area') ),
            Field::make('rich_text', 'wysiwyg', __( 'Content area') ),
            Field::make( 'association', 'query', __( 'Selected posts' ) )
                ->set_types( array(
                    array(
                        'type'      => 'post',
                        'post_type' => 'post',
                    )
                ) )
        );

        return $data;
    }
}
