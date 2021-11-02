<?php

// https://www.php.net/manual/en/language.oop5.visibility.php


/**
 * Class that demonstrates public, protected and private visibility
 */

class MyClass {
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';

    function printProps() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();

$obj->printProps();

echo $obj->public;
//echo $obj->protected;
//echo $obj->private;

class MyClass2 extends MyClass {
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printProps()
    {
        echo $this->public;
        echo $this->protected;
        //echo $this->private;
    }
}

$obj2 = new MyClass2();

echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // Undefined
$obj2->printProps(); // Shows Public2, Protected2, Undefined