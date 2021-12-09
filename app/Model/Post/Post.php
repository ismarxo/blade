<?php

namespace App\Model;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', __( 'Side post settings') )
    ->where('post_type', '=', 'post')
    ->set_context( 'side' )
    ->add_fields(array(    
        Field::make('textarea', 'announcement', __( 'Announcement' ) )
));

