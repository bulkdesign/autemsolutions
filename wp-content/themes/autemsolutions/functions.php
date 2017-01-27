<?php

function register_my_menu() {
  register_nav_menu('new-menu',__( 'Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'menu-active';
    }
    return $classes;
}

?>