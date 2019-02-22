<?php

namespace App\AI\Interpreters;

interface IInterpreter
{
    /**
     * @return string
     */
    public function regex();

    /**
     * @param string $expression
     * @return mixed
     */
    public function interpret(string $expression);
}