<?php
$cat = 1;
include 'showcat.php';

$bat = 'my name is batman';

function test() {
    echo $bat; //udefined variable
}

$a = 1;
$b = 2;

function sum() {
    global $a, $b;
    $b = $a + $b;
}

sum();
echo $b;

function sum2() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

sum2();
echo $b;

//superglobal $_POST, $_GET;

//static variables

function countSmt() {
    static $counter = 0;

    echo $counter.PHP_EOL;
    $counter++;
}

countSmt();
countSmt();
countSmt();

function test_global_ref() {
    global $obj;
    $new = new stdclass;
    $obj = &$new;
}

function test_global_noref() {
    global $obj;
    $new = new stdclass;
    $obj = $new;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
