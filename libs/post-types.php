<?php

    add_action('init','theme_init_posttypes');
    
    function theme_init_posttypes() {
        
        $cp_args = array( 'labels' => array(
            'name' => 'Oferty pracy',
            'singular_name' => 'Oferty pracy',
            'all_items' => 'Wszystkie oferty pracy',
            'add_new' => 'Dodaj nową oferte',
            'add_new_item' => 'Dodaj nową ofertę',
            'edit_item' => 'Edytuj ofertę',
            'new_item' => 'Nowa oferta',
            'view_item' => 'Zobacz oferty',
            'search_items' => 'Szukaj oferty',
            'not_found' => 'Nie znaleziono żadnych ofert', 
            'not_found_in_trash' => 'Nie znaleziono żadnych ofert w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'menu_position' => 5, 
        'supports' => array(
            'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats' ),
            'has_archive' => true );
        
        register_post_type('career', $cp_args);


    }
?>