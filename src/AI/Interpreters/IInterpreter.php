<?php

namespace App\AI\Interpreters;

interface IInterpreter
{
    /**
     * @return string
     */
    public function regex();

    /**
     * @return string[]
     */
    public function rules();

    /**
     * @param string $expression
     * @return mixed
     */
    public function interpret(string $expression);
}