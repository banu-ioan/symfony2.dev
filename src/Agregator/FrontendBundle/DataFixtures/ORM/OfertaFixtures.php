<?php
namespace Agregator\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agregator\FrontendBundle\Entity\Oferta;

class OfertaFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Oferta = new Oferta();
        $Oferta->setNume('Sint vopsitor');
        $Oferta->setSlug('Sint-vopsitor');
        $Oferta->setDescriere('Va ofer servisiile');
        $Oferta->setPrestator($manager->merge($this->getReference('prestator-1')));
        $Oferta->addCategorie($manager->merge($this->getReference('Categorie test 2')));
        $manager->persist($Oferta);
                
        $Oferta = new Oferta();
        $Oferta->setNume('Sint instalator');
        $Oferta->setSlug('Sint-instalator');
        $Oferta->setDescriere('Luati-ma');
        $Oferta->setPrestator($manager->merge($this->getReference('prestator-3')));
        $Oferta->addCategorie($manager->merge($this->getReference('Categorie test 1')));
        $manager->persist($Oferta);
        
        $Oferta = new Oferta();
        $Oferta->setNume('Sint tinichigiu');
        $Oferta->setSlug('Sint-tinichigiu');
        $Oferta->setDescriere('7 ore pe zi 5 zile pe saptamana, ieftin');
        $Oferta->setPrestator($manager->merge($this->getReference('prestator-3')));
        $Oferta->addCategorie($manager->merge($this->getReference('Categorie test 2')));
        $manager->persist($Oferta);
        
        
        $manager->flush();
    }


    public function getOrder()
    {
        return 2;
    }

}