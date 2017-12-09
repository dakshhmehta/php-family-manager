<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class BaseCommand extends Command
{
	protected static $input;
	protected static $output;

	public static function setIO(InputInterface $input, OutputInterface $output){
		static::$input = $input;
		static::$output = $output;
	}

	protected function ask($question){
    	$helper = $this->getHelper('question');
        $question = new Question($question, false);

        return $helper->ask(static::$input, static::$output, $question);
	}
}