<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FeedFamilyCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('feed');
        $this->setDescription('Feed the initial family data.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	static::init($input, $output);

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

        $satvy = (new Member("Satvy", "F"))->addSpouse("Asva");
        $kriya = (new Member("Kriya", "M"));
        $savya = (new Member("Savya", "M"))->addSpouse("Krpi")->addChildren([$kriya]);
        $misa = (new Member("Misa", "M"));
        $saayan = (new Member("Saayan", "M"))->addSpouse("Mina")->addChildren([$misa]);
        $satya = (new Member("Satya", "F"))->addSpouse("Vyan")->addChildren([$satvy, $savya, $saayan]);
        
        $shan = (new Member("King Shan", "M"))->addSpouse("Queen Anga")->addChildren([
            $ish,
            $chit,
            $vich,
            $satya
        ]);
        
        static::$family = new Family($shan);
        static::$family->save();
        static::$family->dd();

    	$output->writeln('Family has been seeded.');
    }
}