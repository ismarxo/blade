<?php

namespace App\Model;

use Carbon_Fields\Field;

class HeroSimple extends Section
{
    public static function getData()
    {
        $data = array(
            Field::make('complex', 'slides', __( 'Slides' ) )
                ->set_layout('tabbed-horizontal')
                ->add_fields('slide', __( '' ), array(
                    Field::make('separator', 'pre-title__separator', __( 'Pretitle' ) ),
                    Field::make('text', 'pre-title__accent', __('Accent pre-title text') )
                        ->set_width(30),
                    Field::make('text', 'pre-title', __( 'Simple pre-title text' ) )
                        ->set_width(70),
                    Field::make('separator', 'title__separator', __( 'Title') ),
                    Field::make('select', 'title__status', __( 'Title status') )
                        ->set_width(20)
                        ->set_options(Section::getTags())
                        ->set_default_value('div'),
                    Field::make('textarea', 'title', __( 'Title' ) )
                        ->set_width(80),
                    Field::make('separator', 'wysiwyg__separator', __( 'Content area') ),
                    Field::make('rich_text', 'wysiwyg', __( 'Content area') ),
                    Field::make('separator', 'buttons__separator', __( 'Buttons') ),
                    Field::make('complex', 'buttons', __( 'Buttons' ) )
                        ->add_fields( 'button', __( 'Button' ), array(
                            Field::make('text', 'title', __( 'Name of button' ) )
                                ->set_width(30),
                            Field::make('image', 'image', __( 'Icon of button' ))
                                ->set_width(20),
                            Field::make('text', 'link', __( 'Action of button' ) )
                                ->set_width(30),
                            Field::make('checkbox', 'color', __( 'Accented?' ) )
                                ->set_width(20),
                        )),
                    Field::make('separator', 'decoration__separator', __( 'Decoration') ),
                    Field::make('image', 'image', __( 'Image' ) )
                        ->set_width(33),
                    Field::make('image', 'background__video', __( 'Background video' ) )
                        ->set_width(33),
                    Field::make('image', 'background__image', __( 'Background image' ) )
                        ->set_width(33),
                ))
        );

        return $data;
    }
}


