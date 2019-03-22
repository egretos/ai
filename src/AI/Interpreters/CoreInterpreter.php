<?php

namespace App\AI\Interpreters;

use Symfony\Component\DependencyInjection\Definition;

class CoreInterpreter
{
    private $definition;

    private $coreInterpreters = [
      CommandInterpreter::class
    ];

    /**
     * @var IInterpreter[]
     */
    private $initCoreInterpreters = [];

    public function __construct()
    {
        $this->definition = new Definition;

        $this->init();
    }

    public function init()
    {
        foreach ($this->coreInterpreters as $interpreterName) {
            $this->definition->setClass($interpreterName);

            $this->initCoreInterpreters[] = $this->definition->getClass();
        }
    }

    /**
     * @param string $subject
     * @return IInterpreter[]
     */
    public function whoMatchRegex(string $subject)
    {
        $results = [];

        foreach ($this->initCoreInterpreters as $interpreter) {
            if (preg_match($interpreter->regex(), $subject)) {
                $results[] = $interpreter;
            }
        }

        return $results;
    }
}