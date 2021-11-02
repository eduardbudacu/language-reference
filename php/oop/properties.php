<?php


define('myConstant', 42);

//property declaration
class SimpleClass {

    public $var;
    public $var0 = 'some string';
    public $var1 = 'hello ' . 'world';
    public $var2 = <<<EOD
hello world
EOD;
    public $var3 = 1 + 2;
    public $var4 = myConstant;
    public $var5 = [true, false];
    public $var6 = <<<'EOD'
hello world
EOD;
    //invalid property declarations
    //public $var7 = self::myStaticMethod();
    //public $var8 = $myVar;
}

array_map(function($v) { var_dump($v); }, get_object_vars((new SimpleClass())));

//since php 7.4.0 property definitions can include type declarations

class User {
    public int $id;
    public ?string $name;

    public function __construct(int $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$user = new User(1, null);

var_dump($user->id);
var_dump($user->name);

//accessing properties with getters and setters
class Shape {
    public int $numberOfSides;
    public string $name;

    public function setNumberOfSides(int $numberOfSides): void {
        $this->numberOfSides = $numberOfSides;
    }

    public function getNumberOfSides(): int {
        return $this->numberOfSides;
    }

    public function setName(string $name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }
}

$triangle = new Shape();
$triangle->setNumberOfSides(3);
$triangle->setName('triangle');

var_dump($triangle->getNumberOfSides());
var_dump($triangle->getName());

//accessing an unititialized property will result in a fatal error
$circle = new Shape();
$circle->setName('circle');

var_dump($circle->getNumberOfSides());