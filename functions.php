<?php

// enqueue stylesheets
function load_stylesheets() 
    {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('style');
    }

add_action('wp_enqueue_scripts', 'load_stylesheets');


// enqueue scripts
function load_js() 
    {
        wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', '', 1, true);
        wp_enqueue_script('bootstrapjs');

        wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
        wp_enqueue_script('customjs');
    }

add_action('wp_enqueue_scripts', 'load_js');

//switch relative URLs

function switch_to_relative_url($html, $id, $caption, $title, $align, $url, $size, $alt)
{
	$imageurl = wp_get_attachment_image_src($id, $size);
	$relativeurl = wp_make_link_relative($imageurl[0]);   
	$html = str_replace($imageurl[0],$relativeurl,$html);
	      
	return $html;
}

add_filter('image_send_to_editor','switch_to_relative_url',10,8);

?>