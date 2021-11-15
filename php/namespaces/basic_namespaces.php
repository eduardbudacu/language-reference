<?php




namespace MyNamespace;



class MyClass {
    public function hello() {
        echo "world";
    }
}

namespace SecondNamespace;

class MyClass {
    public function hello() {
        echo "some";
    }
}

$obj = new \MyNamespace\MyClass();
$obj->hello();

$obj =  new \SecondNamespace\MyClass();
$obj->hello();

use \MyNamespace\MyClass as SomeName;

$obj = new SomeName();
$obj->hello();
echo SomeName::class;

spl_autoload_register(function ($cls) {
    echo $cls;
});

$obj = new IDontExist\MyClass();
