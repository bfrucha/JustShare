<?php

namespace JustShare\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JustShare\CoreBundle\Entity\Categorie;

class Categories implements FixtureInterface {
	
	public function load(ObjectManager $manager) {
		$noms = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Evènement');
		
		foreach($noms as $i => $nom) {
			$liste_categories[$i] = new Categorie();
			$liste_categories[$i]->setNom($nom);

			$manager->persist($liste_categories[$i]);
		}
		
		$manager->flush();
	}

}

?>