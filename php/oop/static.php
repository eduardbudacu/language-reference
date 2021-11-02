<?php

//static properties and methods can be called without an instance of a class

class Foo {
    public static $my_static = 'somevalue';

    public static function staticFunc() {
        //do something
    }

    public static function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo {
    public function fooStatic() {
        return parent::$my_static;
    }
}

Foo::staticFunc();
$classname = 'Foo';
$classname::staticFunc();

echo Foo::staticValue() . PHP_EOL;

$foo = new Foo();
echo $foo->staticValue() . PHP_EOL;

echo $foo::$my_static . PHP_EOL;

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";

