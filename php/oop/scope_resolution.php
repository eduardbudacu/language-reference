<?php

class MyClass {
    const CONST_VALUE = 'aconst';

    protected function myFunc() {
        echo "MyClass::myFunc" . PHP_EOL;
    }
}

echo MyClass::CONST_VALUE;


class OtherClass extends MyClass {
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . PHP_EOL;
        echo self::$my_static . PHP_EOL;
    }

    public function myFunc() {
        parent::myFunc();
        echo 'OtherClass::myFunc' . PHP_EOL;
    }
}

OtherClass::doubleColon();

$obj = new OtherClass();
$obj->myFunc();