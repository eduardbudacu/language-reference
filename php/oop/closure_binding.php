<?php

class ExecCommand {
    protected $prefix = 'cmd:';

    public function execute(closure $function) {
        $bnd = Closure::bind($function, $this, self::class);
        ($bnd)();
    }
}

$exec = new ExecCommand();

$exec->execute(function() {
    echo $this->prefix . 'mycommand';
});