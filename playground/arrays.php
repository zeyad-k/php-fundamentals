<?php
$list = array('one', 'two', 'three', 'four', 'five');
$countries = ['USA', 'Canada', 'Mexico'];

$length = count($list);

echo $length;

foreach ($countries as $index => $country) {
    echo "\n$index: $country";
}
