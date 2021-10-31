<?php

$a = 1 + "10.5";
$b = 1 + "-1.3e3";
$c = 1 + "bob-1.3e3";
$d = 1 + "bob3";
$e = 1 + "10 Small Pigs";
$f = 4 + "10.4 Small Pigs";
$g = "10.0 pigs" + 1;
$h = "10.0 pigs" + 1.0;

echo join(" ", array($a,$b,$c,$d,$e,$f,$g,$h));