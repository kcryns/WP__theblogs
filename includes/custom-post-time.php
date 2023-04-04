<?php

function theblog_custom_post() {

    $blogPost_label = array(
        'name'  => __('Blog Post' , 'textdomain'),
        'singular_name'  => __('Blog Post' , 'textdomain'),
        'add_new'  => __('Add Blog Post' , 'textdomain'),
        'add_new_item'  => __('Add New Blog' , 'textdomain'),
        'edit_item'  => __('Edit Blog Post' , 'textdomain'),
        'all_item'  => __('Blog Post' , 'textdomain'),
    );

    $blogPost_args = array(
        'labels'    => $blogPost_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );

        register_post_type('blogPost' , $blogPost_args);

$latestPost_label = array(
    'name'  => __('Latest Post' , 'textdomain'),
    'singular_name'  => __('latest Post' , 'textdomain'),
    'add_new'  => __('Add latest Post' , 'textdomain'),
    'add_new_item'  => __('Add New latest' , 'textdomain'),
    'edit_item'  => __('Edit latest Post' , 'textdomain'),
    'all_item'  => __('latest Post' , 'textdomain'),
);

$latestPost_args = array(
    'labels'    => $latestPost_label,
    'public'    => true,
    'capability_type'    => 'post',
    'show_ui'    => true,
    'taxonomies'    => array('post_tag' , 'category'),
    'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

);

    register_post_type('latestPost' , $latestPost_args);

    $featurePost_label = array(
        'name'  => __('Feature Post' , 'textdomain'),
        'singular_name'  => __('feature Post' , 'textdomain'),
        'add_new'  => __('Add feature Post' , 'textdomain'),
        'add_new_item'  => __('Add New feature' , 'textdomain'),
        'edit_item'  => __('Edit feature Post' , 'textdomain'),
        'all_item'  => __('feature Post' , 'textdomain'),
    );
    
    $featurePost_args = array(
        'labels'    => $featurePost_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),
    
    );
    
        register_post_type('featurePost' , $featurePost_args);
}
add_action('init' , 'theblog_custom_post');