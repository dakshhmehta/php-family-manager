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

		static::$family = cache()->get('family');
	}

	protected function ask($question){
    	$helper = $this->getHelper('question');
        $question = new Question($question, false);

        return $helper->ask(static::$input, static::$output, $question);
	}
}