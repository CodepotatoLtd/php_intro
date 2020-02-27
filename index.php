<?php
require_once ('vendor/autoload.php');
require_once('./includes/helpers.php');

/*
 * Simple Variable
 */
$games = 5;

/**
 * Constants / Globals
 */
define('WALLET', $games * 55);

/**
 * Maths examples
 */

$games++;
$games--;

$offer_price = 19.342498234823894;
//echo( round($offer_price, 4) );

/**
 * Echo-ing back to the browser
 */
//echo( WALLET );

/**
 * Built in methods
 */

$title = 'Rocket League       ';
$slug = strtolower( str_replace(' ', '_', trim($title) ) );
//echo( $slug );

/**
 * Dates!
 */

$today = date('D d M Y H:i:s');
//echo( $today );


/** Arrays and functions */

$library = [];

function buyAnotherGame( String $title, Float $price){
    global $library;


    $library[] = [
        'title' => $title,
        'price' => number_format($price,2),
        'youtube_link' => 'https://www.youtube.com/results?search_query=' . trimAndSwap($title, ' ', '+'),
    ];

    return $library;
}

buyAnotherGame('Dying Light', 12.99);
buyAnotherGame('Gran Turismo Sport', 30.00);
buyAnotherGame('Fortnight', 0);

$bike = new QuadBike();
var_dump($bike->getNumberOfWheels());
die;


require_once('./partials/games_library.php');