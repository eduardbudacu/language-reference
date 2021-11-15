<?php
error_reporting(0);

//refrences
$foo = 25;
$bar = &$foo;

echo $bar;
$foo = 24;
echo $bar;

$bar = null;
var_dump($foo);

//unset variables;
var_dump($unset_var);

echo $unset_bool ? "true" : "false";

$unset_str .= "abc";
var_dump($unset_str);

$unset_float += 1.24;
var_dump($unset_float);

$unset_arr[3] = "abc";
var_dump($unset_arr);

$unset_obj->foo = "bar";
var_dump($unset_obj);