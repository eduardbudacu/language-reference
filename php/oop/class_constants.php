<?php

class MyClass {
    //class constants remain unchanged
    //by default all constants are public
    //since php 7.1.0 visibility modifiers are allowed for class constants
    const CONSTANT = 'a constant value';

    function showConstant() {
        echo self::CONSTANT;
    }
}

$obj = new MyClass();

echo MyClass::CONSTANT;

$classname = 'MyClass';

echo $classname::CONSTANT;

$obj->showConstant();

echo $obj::CONSTANT;

// special ::class constat allows for fully qualified class name resolution

echo MyClass::class;


