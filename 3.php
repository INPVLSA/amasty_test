<?php
// Checking all elements, setting int type to numeric
$array = array_map('intval', array_filter($argv, 'is_numeric'));

// Drop duplicates
$array = array_unique($array);

// Sorting
asort($array);

foreach ($array as $value){
    echo $value . ' ';
}