<?php

$array = array(
    "foo" => "bar",
    "bar" => "foo"
);

//short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo"
];

$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d"
);

var_dump($array);

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100
);

var_dump($array);

//indexed array
$array = array("ala", "bala", "portocala");
var_dump($array);

//array access multidimensions
$cv = array(
    "name" => "Eduard Budacu",
    "age" => "33",
    "programming_languages" => array("PHP", "JavaScript", "Python"),
    "jobs" => array(
        array(
            "title" => "PHP Developer",
            "start_year" => 2007,
            "end_year" => 2010
        ),
        array(
            "title" => "Software Engineer",
            "start_year" => 2010,
            "end_year" => 2013
        )
    )
);

echo "Age is $cv[age]".PHP_EOL;
echo "Name is {$cv['name']}".PHP_EOL;
echo "Second programming language is {$cv['programming_languages'][1]}".PHP_EOL;
echo "First job is {$cv["jobs"][0]['title']}".PHP_EOL;