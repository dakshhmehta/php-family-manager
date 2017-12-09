<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MeetTheFamilyCommand extends BaseCommand
{
	private $family;

	public function __construct($family)
	{
		$this->family = $family;
	}

    protected function configure()
    {
        $this->setName('meet');
        $this->setDescription('Solves the 1st problem of meeting.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	static::setIO($input, $output);

        $name = $this->ask('Enter a person name: ');
        $relatonship = $this->ask('Enter a relationship: ');
    }
}