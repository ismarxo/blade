<?php

namespace Roots\Sage\Classes;

use Roots\Soil\Nav\NavWalker as NavWalker;
/* -------------------------------------------------------------------------- */
/*	Регистрация дочерних классов для формирования меню
/* -------------------------------------------------------------------------- */

class PrimaryMenuWalker extends NavWalker  {
    function __construct( $css_class_prefix ) {
        $this->css_class_prefix = $css_class_prefix;

        // Define menu item names appropriately
        $this->item_css_class_suffixes = array(
            'item'                    => '__item',
            'link'                    => ' hover:text-sky-500 dark:hover:text-sky-400',
            
            'parent_item'             => ' menu__item--sub',

            'active_item'             => '__iteml  active',
            'active_sub_item'         => '__submenu__item  active',
            'parent_of_active_item'   => '__iteml active',
            'ancestor_of_active_item' => '__iteml ancestor-active',

            'sub_menu'                => '__submenu submenu',
            'sub_item'                => '__ submenu__item',
            'sub_link'                => '__ submenu__link'
        );
    }

    // Check for children
    function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {

        $id_field = $this->db_fields['id'];

        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
        }

        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );

    }

    function start_lvl( &$output, $depth = 1, $args = array() ) {

        $real_depth = $depth + 1;

        $indent      = str_repeat( "\t", $real_depth );
        $prefix      = $this->css_class_prefix;
        $suffix      = $this->item_css_class_suffixes;
        $classes     = array(
            $prefix . $suffix['sub_menu'],
        );
        $class_names = implode( ' ', $classes );
        // Add a ul wrapper to sub nav
        $output .= "\n" . $indent . '<ul class="' . $class_names . '"> <li class="menu__back"><a href="javascript:void(0);">Назад</a></li>' . "\n";
    }

    // Add main/sub classes to li's and links

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        global $wp_query;

        $indent = ( $depth > 0 ? str_repeat( "    ", $depth ) : '' ); // code indent
        $prefix = $this->css_class_prefix;
        $suffix = $this->item_css_class_suffixes;
        // Item classes
        $item_classes = array(
            'item_class'            => $depth == 0 ? $prefix . $suffix['item'] : $prefix . $suffix['sub_item'],
            'parent_class'          => $args->has_children ? $parent_class = $suffix['parent_item'] : '',
            'active_page_class'     => in_array( "current-menu-item", $item->classes ) ? ( $depth == 0 ? $prefix . $suffix['active_item'] : $prefix . $suffix['active_sub_item'] ) : '',
            'active_parent_class'   => in_array( "current-menu-parent", $item->classes ) ? $prefix . $suffix['parent_of_active_item'] : '',
            'active_ancestor_class' => in_array( "current-menu-ancestor", $item->classes ) ? $prefix . $suffix['ancestor_of_active_item'] : '',
            'user_class'            => $item->classes[0] !== '' ? $prefix . '__item--' . $item->classes[0] : ''
        );
        // convert array to string excluding any empty values
        $class_string = implode( "  ", array_filter( $item_classes ) );
        // Add the classes to the wrapping <li>
        $output .= $indent . '<li class="' . $class_string . '">';
        // Link classes
        $link_classes      = array(
            'item_link' => $depth == 0 ? $prefix . $suffix['link'] : $prefix . $suffix['sub_link'],
        );
        $link_class_string = implode( "  ", array_filter( $link_classes ) );
        $link_class_output = 'class="' . $link_class_string . '"';
        // link attributes
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
        // remove circular references
        if ( ! $item->current ) {
            $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
        } else {
            $attributes .= ! empty( $item->url ) ? ' ' : ' ';
        }
        // Creatre link markup
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . ' ' . $link_class_output . '>';
        $item_output .= $args->link_before;
        $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $args->link_after;
        $item_output .= $args->after;
        $item_output .= '</a>';
        // Filter <li>

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}