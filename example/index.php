<?php

require_once __DIR__ . '/../vendor/autoload.php';

$array = new Collection\Collection(array(1, 2, 3, 4, 5));

foreach($array as $key => $value) {
    echo $key . '=>' . $value . '<br />';
}

echo '<br />';

$array[0] = null;

foreach($array as $key => $value) {
    echo $key . '=>' . $value . '<br />';
}

