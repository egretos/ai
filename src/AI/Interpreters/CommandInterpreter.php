<?php

namespace App\AI\Interpreters;

class CommandInterpreter extends Interpreter
{
    public function regex()
    {
        return ':([A-z]*)\s([A-z]*)';
    }

    public function rules()
    {
        return [':{command} {parameter}'];
    }

    public function interpret(string $expression)
    {
        // TODO: Implement interpret() method.
    }
}