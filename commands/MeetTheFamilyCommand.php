<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MeetTheFamilyCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('meet');
        $this->setDescription('Solves the 1st problem of meeting.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	static::init($input, $output);

        $name = $this->ask('Enter a person name: ');
        $relationship = $this->ask('Enter a relationship: ');

        $members = static::$family->findByRelation($name, $relationship);

        if(is_array($members)){
            if(count($members) > 0){
    	        $output->writeln(implode(', ', $members));
            }
        }
        else {
        	$output->writeln($members);
        }
    }
}