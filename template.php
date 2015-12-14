<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 27/09/2015
 * Time: 20:16
 */

/**
 * Impelements hook_preprocess_html().
 */
function neyensbootstrap_preprocess_html(&$variables)
{
    // Add conditional stylesheets for IE
    drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
    drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));

    //Add external .js and .css
    drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'external', array('weight' => 1));

    drupal_add_js('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', 'external', array('weight' => 2));

    drupal_add_css('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array('type' => 'external'));

    drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));

    // Adding viewport to HTML Header.
    $viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1')
    );
    drupal_add_html_head($viewport, 'viewport');

    // Adding meta tags description, one page template dus kies hier om deze rechtstreeks
    // toe te voegen.
    $description = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'description',
            'content' => 'Neyens tuinaanleg en tuinonderhoud zowel privé, gemeente en
            bedrijven  ook vijvers en zwembaden als ook verhardingen behoort tot onze
            activiteiten.')
    );
    drupal_add_html_head($description, 'description');

    // Adding meta tags keywords, one page template dus kies hier om deze rechtstreeks
    // toe te voegen.
    $keywords = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'keywords',
            'content' => 'tuinaanleg, tuinonderhoud, verhardingen, waterpatijen, vijvers,
            zwembaden, tuinverlichting, beplanting, gazon, grasperken')
    );
    drupal_add_html_head($keywords, 'keywords');
}


/**
 * Impelements hook_preprocess_page().
 */
function neyensbootstrap_preprocess_page(&$variables)
{
    $variables['images_path'] = $variables['base_path'] . $variables['directory'] . '/images/';
    $variables['video_path'] = $variables['base_path'] . $variables['directory'] . '/video/';
    /**
     *
     */
    drupal_add_js(drupal_get_path('theme', 'neyensbootstrap') . '/js/collapse.js', array('weight' => 6));

    /**
     * jquery.smooth-scroll, sticky and to_top only on the front page
     */
    if (drupal_is_front_page()) {
        drupal_add_js(drupal_get_path('theme', 'neyensbootstrap') . '/js/jquery.smooth-scroll.js', array('weight' => 3));
        drupal_add_js(drupal_get_path('theme', 'neyensbootstrap') . '/js/to_top.js', array('weight' => 4));
        drupal_add_js(drupal_get_path('theme', 'neyensbootstrap') . '/js/sticky.js', array('weight' => 5));
    }
}