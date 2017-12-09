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
		$ish = new Member("Ish", "M");
		
		$jata = (new Member("Jata", "M"));
		$driya = (new Member("Driya", "F"))->addSpouse("Mnu");
		$drita = (new Member("Drita", "M"))->addSpouse("Jaya")->addChildren([$jata, $driya]);
		$vrita = new Member("Vrita", "M");
		$chit = (new Member("Chit", "M"))->addSpouse("Ambi")->addChildren([$drita, $vrita]);

		$lavnya = (new Member("Lavnya", "F"))->addSpouse("Gru");
		$vila = (new Member("Vila", "M"))->addSpouse("Jnki")->addChildren([$lavnya]);
		$chika = (new Member("Chika", "F"))->addSpouse("Kpila");
		$vich = (new Member("Vich", "M"))->addSpouse("Lika")->addChildren([$vila, $chika]);

		$satya = (new Member("Satya", "F"))->addSpouse("Vyan");
		
		$shan = (new Member("King Shan", "M"))->addSpouse("Queen Anga")->addChildren([
			$ish,
			$chit,
			$vich,
			$satya
		]);
		
		static::$family = new Family($shan);
		//static::$family->dd();
	}

	protected function ask($question){
    	$helper = $this->getHelper('question');
        $question = new Question($question, false);

        return $helper->ask(static::$input, static::$output, $question);
	}
}