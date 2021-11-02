<?php 

//constructors in inheritance
class BaseClass {
    function __construct()
    {
        print "Base class\n";
    }
}

class SubClass extends BaseClass {
    function __construct()
    {
        parent::__construct();
        print "Sub class\n";
    }
}

class OtherSubClas extends BaseClass {

}

$obj = new BaseClass();
$obj1 =  new SubClass();
$obj2 = new OtherSubClas();

//using constructor with arguments
class Point {
    public int $x;
    public int $y;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
}

$p1 = new Point(1,2);
$p2 = new Point(2);

// named parameters were introduced in version 8.0.0
// $p3 = new Point(y: 5, x:2);


class MyDestructableClass 
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();