<?php
namespace Agregator\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agregator\FrontendBundle\Entity\Cerere;

class CerereFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Cerere = new Cerere();
        $Cerere->setNume('Cerere de vopsitor');
        $Cerere->setDescriere('Am nevoie de un vopsitor');
        $Cerere->setBeneficiar($manager->merge($this->getReference('beneficiar-1')));
        $Cerere->addCategorie($manager->merge($this->getReference('Categorie test 2')));
        $manager->persist($Cerere);
                
        $Cerere = new Cerere();
        $Cerere->setNume('Cerere de instalator');
        $Cerere->setDescriere('Am nevoie de un instalator');
        $Cerere->setBeneficiar($manager->merge($this->getReference('beneficiar-3')));
        $Cerere->addCategorie($manager->merge($this->getReference('Categorie test 1')));
        $manager->persist($Cerere);
        
        $Cerere = new Cerere();
        $Cerere->setNume('Cerere de tinichigiu');
        $Cerere->setDescriere('Am nevoie de un tinichigiu');
        $Cerere->setBeneficiar($manager->merge($this->getReference('beneficiar-3')));
        $Cerere->addCategorie($manager->merge($this->getReference('Categorie test 2')));
        $manager->persist($Cerere);
        
        
        $manager->flush();
    }


    public function getOrder()
    {
        return 2;
    }

}