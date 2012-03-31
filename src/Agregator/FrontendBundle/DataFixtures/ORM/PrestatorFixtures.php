<?php
namespace Agregator\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agregator\FrontendBundle\Entity\Prestator;

class PrestatorFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Prestator = new Prestator();
        $Prestator->setNume('Gina');
        $Prestator->setPrenume('Savuica');
        $Prestator->setVarsta('23');
        $Prestator->setEmail('gina@banuioan.com');
        $this->addReference('prestator-1', $Prestator);
        $manager->persist($Prestator);
        
        $Prestator = new Prestator();
        $Prestator->setNume('Andreea');
        $Prestator->setPrenume('Apostol');
        $Prestator->setVarsta('26');
        $Prestator->setEmail('andreea@banuioan.com');
        $this->addReference('prestator-2', $Prestator);
        $manager->persist($Prestator); 
        
        $Prestator = new Prestator();
        $Prestator->setNume('Giani');
        $Prestator->setPrenume('Chirita');
        $Prestator->setVarsta('30');
        $Prestator->setEmail('giani@banuioan.com');
        $this->addReference('prestator-3', $Prestator);
        $manager->persist($Prestator);
        
        $Prestator = new Prestator();
        $Prestator->setNume('Ion');
        $Prestator->setPrenume('Neculce');
        $Prestator->setVarsta('26');
        $Prestator->setEmail('ion_n@banuioan.com');
        $this->addReference('prestator-4', $Prestator);
        $manager->persist($Prestator);
        
        
        
        $manager->flush();
    }


    public function getOrder()
    {
        return 1;
    }

}