<?php
namespace Agregator\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agregator\FrontendBundle\Entity\Beneficiar;

class BeneficiarFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $beneficiar = new Beneficiar();
        $beneficiar->setNume('Ion');
        $beneficiar->setPrenume('Scarlat');
        $beneficiar->setVarsta('23');
        $beneficiar->setEmail('ion@banuioan.com');
        $this->addReference('beneficiar-1', $beneficiar);
        $manager->persist($beneficiar);
        
        $beneficiar = new Beneficiar();
        $beneficiar->setNume('Raluca');
        $beneficiar->setPrenume('Guiman');
        $beneficiar->setVarsta('26');
        $beneficiar->setEmail('raluca@banuioan.com');
        $this->addReference('beneficiar-2', $beneficiar);
        $manager->persist($beneficiar);
        
        $beneficiar = new Beneficiar();
        $beneficiar->setNume('Cristi');
        $beneficiar->setPrenume('Popescu');
        $beneficiar->setVarsta('30');
        $beneficiar->setEmail('cristi@banuioan.com');
        $this->addReference('beneficiar-3', $beneficiar);
        $manager->persist($beneficiar);
        
        $beneficiar = new Beneficiar();
        $beneficiar->setNume('Alina');
        $beneficiar->setPrenume('Ciobotaru');
        $beneficiar->setVarsta('26');
        $beneficiar->setEmail('alina@banuioan.com');
        $this->addReference('beneficiar-4', $beneficiar);
        $manager->persist($beneficiar);
        
        
        
        $manager->flush();
    }


    public function getOrder()
    {
        return 1;
    }

}