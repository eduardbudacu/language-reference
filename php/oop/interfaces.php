<?php

//interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented
//interfaces are defined in the same way as class but with th interface keyword
//all methods of an interface must be public

interface Template {
    public function setVariable($name, $var);
    public function getHtml($template);
}

class WorkingTemplate implements Template {
    private $vars = [];

    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }

    public function getHtml($template) {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{'.$name.'}', $value, $template);
        }

        return $template;
    }
}

$tpl = new WorkingTemplate();
$tpl->setVariable('name', 'Eduard');
$tpl->setVariable('age', '34');

echo $tpl->getHtml('My name is {name} and I am {age} years old');


//interfaces are extendable

interface A {
    public function foo();
}

interface B extends A {
    public function baz(Baz $baz);
}

class C implements B {
    public function foo() {}

    public function baz(Baz $baz) {}
}

//