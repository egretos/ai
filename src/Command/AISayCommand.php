<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AISayCommand extends Command
{
    protected static $defaultName = 'ai:say';

    protected function configure()
    {
        $this
            ->setDescription('Says text to AI')
            ->setHelp('Allows you say text to AI')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}
