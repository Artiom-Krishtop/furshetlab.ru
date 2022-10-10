<?php

require_once __DIR__ . '/include/defines.php';

function dd($text, $die = true){
    echo '<pre>' . print_r($text, 1) . '</pre>';
    if($die) die('End debug');
}