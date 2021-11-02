<?php

//abstract classes are classes that cannot be instantiated, and any class that contain at least one abstract method must be abstract
//abstract methods declare the method's signature; they cannot define the implementation
//when inheriting from an abstract class all methods marked abstract in the parent's class declaration must be defined in the child class

abstract class AbstractClass {
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass {
    protected function getValue() {
        return 'ConcreteClass1';
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass {
    public function getValue() {
        return 'ConcreteClass2';
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

//cannot instantiate abstract classes
//$abstract = new AbstractClass();

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2();
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;


abstract class AbstractName {
    abstract protected function prefixName($name);
}

class CharacterName extends AbstractName {
    
    //child class may define optional arguments not in the parent's signature
    public function prefixName($name, $separator = '.') {
        if($name == 'Pacman') {
            $prefix = 'Mr';
        } else if ($name == 'Pacwoman') {
            $prefix = 'Mrs';
        } else {
            $prefix = '';
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$obj = new CharacterName();
echo $obj->prefixName('Pacman') . PHP_EOL;
echo $obj->prefixName('Pacwoman') . PHP_EOL;