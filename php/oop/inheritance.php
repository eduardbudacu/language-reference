<?php

class Foo {
    public function printItem($string) {
        echo 'Foo: ' . $string . PHP_EOL;
    }

    public function printPHP() {
        echo 'PHP is great' . PHP_EOL;
    }
}

class Bar extends Foo {
    public function printItem($string) {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();

$foo->printItem('test');
$foo->printPHP();

$bar->printItem('test');
$bar->printPHP();