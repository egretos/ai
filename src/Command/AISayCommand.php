<?php
namespace App\Command;

use App\AI\Command\Output;
use App\AI\Interpreters\CommandInterpreter;
use App\AI\Interpreters\CoreInterpreter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AISayCommand extends Command
{
    /**
     * @var CoreInterpreter
     */
    private $interpreter;

    protected static $defaultName = 'ai:say';

    public function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->interpreter = new CoreInterpreter;

        parent::initialize($input, $output);
    }

    protected function configure()
    {
        $this
            ->setDescription('Says text to AI')
            ->setHelp('Allows you say text to AI')
            ->addArgument('message', InputArgument::REQUIRED, 'message to EAI');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = $input->getArgument('message');

        $messageInterpreters = $this->interpreter->whoMatchRegex($message);

        if (!empty($messageInterpreters)) {
            $messageInterpreter = array_shift($messageInterpreters);

            $messageInterpreter->interpret($message);
        }

        $command = new Output($message);

        $command->run();
        echo PHP_EOL;
    }
}
