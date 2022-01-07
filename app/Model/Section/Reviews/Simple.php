<?php

namespace App\Model;

use Carbon_Fields\Field;

class ReviewsSimple extends Section
{
    public static function getData()
    {
        $data = array(
            Field::make('separator', 'sep-pre-title', 'Предзаголовок'),
           
        );

        return $data;
    }
}
