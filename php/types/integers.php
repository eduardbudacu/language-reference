<?php

$a = 1234; //decimal number
$b = 0123; //octal number
$c = 0x1A; // hexadecimal number
$d = 0b11111111; //binary number
$e = 1_234_567; //decimal number (php 7.4.0)

echo join(" ", array($a, $b, $c, $d, $e));

var_dump((int) 2.3);
var_dump((int) (25/7));
var_dump(round(25/7));