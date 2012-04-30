<?php
namespace Agregator\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agregator\FrontendBundle\Entity\Categorie;

class CategorieFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie = new Categorie();
        $categorie->setNume('Categorie test 1');
        $categorie->setSlug('test-1');
        $this->addReference('Categorie test 1', $categorie);
        $manager->persist($categorie);
        
        $categorie = new Categorie();
        $categorie->setNume('Categorie test 2');
        $categorie->setSlug('test-2');
        $this->addReference('Categorie test 2', $categorie);
        $manager->persist($categorie);
        
        $categorie = new Categorie();
        $categorie->setNume('Categorie test 3');
        $categorie->setSlug('test-3');
        $this->addReference('Categorie test 3', $categorie);
        $manager->persist($categorie);
        
        $categorie = new Categorie();
        $categorie->setNume('Categorie test 4');
        $categorie->setSlug('test-4');
        $this->addReference('Categorie test 4', $categorie);
        $manager->persist($categorie);

        
        $manager->flush();
    }


    public function getOrder()
    {
        return 1;
    }

}