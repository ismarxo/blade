<?php

namespace App\Model;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// собираем конструкцию 

$repeater = Field::make('complex', 'sections_page', __('Sections page') );
$sectionCollection = [];

// get ActiveElements

if(false) //далее здесь будет метод проверки на заданность
{ 
    // перебор и подключение секций
} else {
    $collection = [];   

    // collect all simple data-components   
    $currentDir = get_theme_file_path().'/app/Model/Section/';   
 
    $currentPathDirs = scandir($currentDir);

    foreach($currentPathDirs as $item) 
    {
        if($item != '.' && $item != '..' && $item != 'Section.php') 
        {
            $className = "\App\Model\\".$item.'Simple';           
            $key = strtolower($item);
            $collection[$key] = $className::getData();
        }
    }
}

foreach($collection as $key => $item) 
{
    $repeater = $repeater->add_fields($key, __( 'Section '.$key ), $item);
}

 
Container::make('post_meta', __( 'Settings Repeater Page') )
    ->where('post_template', '=', 'views/page-sections.blade.php')
    ->add_fields(array( $repeater ));