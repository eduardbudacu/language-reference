<?php

var_dump($_GET);
var_dump($_ENV);
var_dump($_SERVER);

foreach($_SERVER as $key => $value) {
    echo $key.PHP_EOL;
}

echo join(PHP_EOL, array_keys($_SERVER));