<?php

//single quoted

echo 'this is a one line string'.PHP_EOL;

echo 'this string 
spreads on two lines'.PHP_EOL;

echo 'This is how you escape a quote \' '.PHP_EOL;

echo 'Double slash to display a slash \\'.PHP_EOL;

echo 'Special characters like \n and \t are not so special here'.PHP_EOL;

echo 'And no $variable expansion $either'.PHP_EOL;

//double quoted

$a = "replaced";

echo "I can do magic with \n and \t. And variables get $a".PHP_EOL;



//heredoc

echo <<<END
    a
        b
            c
END.PHP_EOL;


//multiline example with object and variables

class foo {
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar2');
    }
}


$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.

Now, I am printing some {$foo->bar[1]}.

This should print a capital 'A': \x41
EOT.PHP_EOL;