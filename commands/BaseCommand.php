<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class BaseCommand extends Command
{
	protected static $input;
	protected static $output;
	protected static $family;

	public static function init(InputInterface $input, OutputInterface $output){
		static::$input = $input;
		static::$output = $output;

		// Data feeding
		static::$family = new Family();

		$ish = new Member("Ish", "M");
		$chit = (new Member("Chit", "M"))->addSpouse("Ambi");
		$vich = (new Member("Vich", "M"))->addSpouse("Lika");
		$satya = (new Member("Satya", "F"))->addSpouse("Vyan");
		
		$shan = new Member("King Shan", "M");
		$shan->addSpouse("Queen Anga");
		$shan->addChildren([
			$ish,
			$chit,
			$vich,
			$satya
		]);
		
		static::$family->addMember($shan)
		->dd();
	}

	protected function ask($question){
    	$helper = $this->getHelper('question');
        $question = new Question($question, false);

        return $helper->ask(static::$input, static::$output, $question);
	}
}