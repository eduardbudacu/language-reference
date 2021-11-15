<?php

//anonymous classes allow to create instances of a class defined on the spot


$obj = new class(10) {
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function showAge() {
        echo $this->age;
    }
};

$obj->showAge();

var_dump(get_class($obj));

