<?php

namespace AppBundle\Command;

use AppBundle\Entity\City;
use AppBundle\Entity\Country;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LoadFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:load-fixtures')
            ->setDescription('valami')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cities = [
            'Szeged',
            'Budapest',
            'Szolnok',
            'Eger',
            'Esztergom',
            'Csongrád',
        ];

        $countries = [
            'Magyarország',
            'Anglia',
            'Szerbia',
            'Románia',
            'Németország',
        ];

        $output->writeln('Loading fixtures to database');

        $em = $this->getContainer()->get('doctrine')->getManager('default');

        $output->writeln('Loading cities:');
        $i = 1;
        $count = count($cities);
        foreach ($cities as $city) {
            $fixture = new City();
            $fixture->setName($city);

            $em->persist($fixture);
            $output->writeln("  {$i}/{$count} done");
            $i++;
        }

        $output->writeln('Loading coutries:');
        $i = 1;
        $count = count($countries);
        foreach ($countries as $country) {
            $fixture = new Country();
            $fixture->setName($country);

            $em->persist($fixture);
            $output->writeln("  {$i}/{$count} done");
            $i++;
        }
        $em->flush();

        $output->writeln('Done');
    }

}
