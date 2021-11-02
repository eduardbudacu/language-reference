<?php

class SimpleClass {
    public $var = 'a default value';

    public function displayVar() {
        echo $this->var.PHP_EOL;
    }
}

$obj = new SimpleClass();

$obj->displayVar();

$className = 'SimpleClass';

$instance = new $className();
$instance->displayVar();

//object assignment
$instance = new SimpleClass();

$assigned = $instance;
$reference = &$instance;

$instance->var = '$assigned will have this value';

$instance = null;

var_dump($instance);
var_dump($reference);
var_dump($assigned);

//object creation with factory method

class Test {
    static public function getNew() {
        return new static;
    }
}

class Child extends Test {}

$obj1 = new Test;
$obj2 = Test::getNew();

var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

//access of members when creating a new object

echo (new DateTime())->format('Y').PHP_EOL;


//properties and methods can have the same name as in the example below

class Foo {
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = new Foo();

echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;


class AnonymousFunct {
    public $bar;

    public function __construct()
    {
        $this->bar =  function() {
            return 42;
        };
    }
}

$obj = new AnonymousFunct();

echo ($obj->bar)().PHP_EOL;

//simple class inheritance
// a class can inherit constant, methods and properties of another class
class ExtendClass extends SimpleClass {
    function displayVar() {
        echo "Extended class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();

//extension rule
//when overriding a method, its signature must be compatible with the parrent method
//Liskov Substitution Principle
//objects of a superclass shall be replaceable with objects of its sublcasses without breaking the application


class Base {
    public function foo(int $a) {
        echo "Valid\n";
    }
}

class Extend1 extends Base {
    public function foo(int $a = 5) {
        echo "Valid\n";
    }
}

class Extend2 extends Base {
    public function foo(int $a, $b = 5) {
        echo "Valid\n";
    }
}

$extended1 =  new Extend1();
$extended1->foo();

$extended2 = new Extend2();
$extended2->foo(1);

