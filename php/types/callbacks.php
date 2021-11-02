<?php

function my_callback_function() {
    echo 'hello world'.PHP_EOL;
}

call_user_func('my_callback_function');

class MyClass {
    static function myCallbackMethod() {
        echo 'Hello world'.PHP_EOL;
    }
}

call_user_func(array('MyClass', 'myCallbackMethod'));

$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

call_user_func('MyClass::myCallbackMethod');

class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who'));


class C {
    public function __invoke($name)
    {
        echo 'Hello ', $name, "\n";
    }
}

$c = new C();
$c("Eduard");

call_user_func($c, 'PHP!');