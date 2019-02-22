<?php

namespace App\AI\Command;

class Write extends Command
{
    private $message = '';

    public function __construct(...$args)
    {
        if (func_num_args() == 1) {
            $this->message = (string) $args[0];
        }
    }

    public function execute()
    {
        $this->setResult($this->printMessage($this->message));
    }

    public function printMessage(string $message)
    {
        echo $message;
        return $message;
    }
}