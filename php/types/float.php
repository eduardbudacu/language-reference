<?php

$a = 1.234;
$b = 1.2e4;
$c = 7E-10;
$d = 1_234.567;

echo join(" ", array($a, $b, $c, $d));