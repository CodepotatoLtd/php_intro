<?php

require_once('./includes/Vehicle.php');
require_once('./includes/Motorbike.php');
require_once('./includes/QuadBike.php');


function trimAndSwap(String $text, String $search = ' ', String $replacement = '_'){
    return strtolower( str_replace($search, $replacement, trim($text) ) );
}

