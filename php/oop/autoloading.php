<?php

spl_autoload_register(function($classname) {
    include $classname . '.php';
});

$obj1 = new MyClass1();
$obj2 = new MyClass2();
