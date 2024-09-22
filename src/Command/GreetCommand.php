<?php

namespace MahroofSoftware\CommandLineExample\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends Command
{
    protected function configure()
    {
        $this
            ->setDescription('Greets a person.')
            ->setName('app:greet')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the person to greet.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $output->writeln('Hello, ' . $name . '!');

        return Command::SUCCESS;
    }
}
