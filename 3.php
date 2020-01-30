<?php
/**
 * @var string $argv
 */

// Checking all elements, setting int type to numeric
$array = array_map('intval', array_filter(explode(' ', $argv[1]), 'is_numeric'));

// Drop duplicates
$array = array_unique($array);

// Sorting
asort($array);

foreach ($array as $value){
    echo $value . ' ';
}