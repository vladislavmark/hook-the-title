<?php

add_filter( 'the_title', 'add_custom_title' );
function add_custom_title( $title ) {
    if( is_page() )
        $title = 'hook ' . $title;
    return $title;
}