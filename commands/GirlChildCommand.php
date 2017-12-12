<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GirlChildCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('child:girl');
        $this->setDescription('Find the mother with highest number of daughters.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	static::init($input, $output);

        $mothers = [];
        $count = 0;
        foreach (static::$family->getMembers('F') as &$member) {
            if($member->spouse->father == null) continue;

            $daughters = $member->findChildrenByGender('F');
            if(count($daughters) >= $count){
                $mothers[] = $member->name;
                $count = count($daughters);
            }
        }

        $output->writeln(implode(', ', $mothers));
    }
}