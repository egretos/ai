<?php

namespace App\AI\Interpreters;

use Symfony\Component\HttpKernel\KernelInterface;

class CoreInterpreter
{
    private $kernel;

    private $coreInterpreters = [
        CommandInterpreter::class
    ];

    /**
     * @var IInterpreter[]
     */
    private $initCoreInterpreters = [];

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;

        $this->init();
    }

    public function init()
    {
        foreach ($this->coreInterpreters as $interpreterName) {
            $this->kernel->getContainer()
                ->set($interpreterName, $interpreterName);
            $this->initCoreInterpreters[] = new $interpreterName;
            $this->initCoreInterpreters[] = $this->kernel->getContainer()->get($interpreterName);
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
            //echo $interpreter;

            if (preg_match($interpreter->regex(), $subject)) {
                $results[] = $interpreter->interpret($subject);
            }
        }

        return $results;
    }
}