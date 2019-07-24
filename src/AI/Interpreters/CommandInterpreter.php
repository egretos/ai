<?php

namespace App\AI\Interpreters;

use App\Repository\CommandRepository;

class CommandInterpreter extends Interpreter
{
    /**
     * @var CommandRepository
     */
    private $repository;

    /*public function __construct(CommandRepository $repository)
    {
        $this->repository = $repository;
    }*/

    public function setRepository(CommandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function regex()
    {
        return '/:([A-z]*)\s([A-z]*)/';
    }

    public function rules()
    {
        return [':{command} {parameter}'];
    }

    public function interpret(string $expression)
    {
        // TODO: Implement interpret() method.

        return $this->repository->test();
    }
}