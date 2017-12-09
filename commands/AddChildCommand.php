<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddChildCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('child:add');
        $this->setDescription('Add newly born baby to her mother.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	static::init($input, $output);

        $motherName = $this->ask('Enter mother name: ');
        $mother = static::$family->findByName($motherName);

        if($mother->gender == 'M'){
            $output->writeln('Member found, but is male. Please write female name.');
            return false;
        }

        $name = $this->ask('Enter a child name: ');
        $gender = $this->ask('Enter a gender: ');

        if($gender != 'M' && $gender != 'F'){
            $output->writeln('Invalid gender');
            return false;
        }

        $member = new Member($name, $gender);
        $mother->addChildren($member);

        static::$family->save();

        $output->writeln($member->name.' has been added to the family.');
    }
}