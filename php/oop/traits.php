<?php

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$obj = new MyHelloWorld();
$obj->sayHello();


//alternate precedence order

trait HelloWorld {
    public function sayHello() {
        echo 'Hello World';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;

    public function sayHello() {
        echo 'Hello Universe';
    }
}

$obj = new TheWorldIsNotEnough();
$obj->sayHello();

//multiple traits

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class Message {
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}

$obj = new Message();
$obj->sayHello(); $obj->sayWorld(); $obj->sayExclamationMark();

//conflict resolution
trait A {
    public function smallTalk() {
        echo 'a';
    }

    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }

    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A,B {
        B::smallTalk insteadOf A;
        A::bigTalk insteadOf B;
    }
}

class Alias_Talker {
    use A,B {
        B::smallTalk insteadOf A;
        A::bigTalk insteadOf B;
        B::bigTalk as talk;
    }
}

//the as syntax can be used to change method visibility
trait HelloWorldTrait {
    public function sayHello() {
        echo 'Hello World';
    }
}

class MyClass1 {
    use HelloWorldTrait {
        sayHello as protected;
    }
}

class MyClass2 {
    use HelloWorldTrait {
        sayHello as private myPrivateHello;
    }
}

//traits can be composed
trait MyComposedTrait {
    use Hello, World;
}

class MyHelloWorld2 {
    use MyComposedTrait;
}

$obj = new MyHelloWorld2();
$obj->sayHello();
$obj->sayWorld();

//traits can express requirements by adding abstract methods
//traits can define static variables, static methods and static properties
//if a trait defines a property then a class can not define a property with the same name unless it is compatible (same visibility and initial value)
