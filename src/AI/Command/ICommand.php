<?php

namespace App\AI\Command;

interface ICommand
{
    /**
     * Action with real object without any AI logic
     *
     * @return void
     */
    public function execute();

    /**
     * Execute command using AI logic. Returns result of command execution
     *
     * @return string
     */
    public function run();

    /**
     * @return string
     */
    public function getResult();
}