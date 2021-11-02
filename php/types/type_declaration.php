<?php

// https://www.php.net/manual/en/language.types.declarations.php

//

function test(bool $param) {}

test(true);


class C {}

class D extends C {}

class E {}

function f(C $c) {
    echo get_class($c).PHP_EOL;
}

f(new C);
f(new D);
//f(new E);

interface I {
    public function f();
}

class Foo implements I {
    public function f() {

    }
}

class Bar {

}

function fun(I $i) {
    echo get_class($i).PHP_EOL;
}


fun(new Foo());
//fun(new Bar());


// basic return type declaration

function sum($a, $b): float {
    return $a + $b;
}

var_dump(sum(2,3));
