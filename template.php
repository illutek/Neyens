<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 27/09/2015
 * Time: 20:16
 */

function neyensbootstrap_preprocess_html(&$variables) {
    // Add conditional stylesheets for IE
    drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
    drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
    //Add external .js and .css
    drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'external');
    drupal_add_js('https://code.jquery.com/jquery-migrate-1.2.1.min.js', 'external');
    drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));
}

/**
 * Impelements hook_preprocess_page().
 */
function neyensbootstrap_preprocess_page(&$vars) {
    $vars['images_path'] = $vars['base_path'] . $vars['directory'] . '/images';
    $vars['video_path'] = $vars['base_path'] . $vars['directory'] . '/video';
}