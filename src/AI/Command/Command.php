<?php

namespace App\AI\Command;

/**
 * Class Command
 * @package App\AI\Command
 */
abstract class Command implements ICommand
{
    const STATE_READY   = 0;
    const STATE_DONE    = 1;
    const STATE_PROCESS = 2;

    const STATE_FAILED  = -1;

    protected $result;

    private $state = self::STATE_READY;

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return $this
     */
    private function setState(int $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function run()
    {
        $this->setState(static::STATE_PROCESS);
        try {
            $this->execute();
            $this->setState(static::STATE_DONE);
            return $this->getResult();
        } catch (\Exception $exception) {
            $this->setState(static::STATE_FAILED);
        }

        return null;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return $this
     */
    public function setResult(string $result)
    {
        $this->result = $result;
        return $this;
    }

    public function __toString()
    {
        return $this->run();
    }
}