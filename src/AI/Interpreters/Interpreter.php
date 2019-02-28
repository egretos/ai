<?php

namespace App\AI\Interpreters;

use App\AI\Command\ICommand;

/**
 * Class Interpreter
 * @package App\AI\Interpreters
 *
 * @property integer $index
 * @property array $ruleParams
 * @property string $name
 */
abstract class Interpreter implements IInterpreter
{
    public $index = 1;

    public $ruleParams = [
        'command' => ICommand::class,
        'parameter' => 'parameter:class',
    ];

    public $name;

    public function getName()
    {
        try {
            return $this->name ?: strtolower(substr((new \ReflectionClass($this))->getShortName(), 0, -11));
        } catch (\ReflectionException $exception) {
            return null;
        }
    }
}