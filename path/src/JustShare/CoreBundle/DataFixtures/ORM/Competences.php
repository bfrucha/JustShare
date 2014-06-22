<?php

namespace JustShare\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JustShare\CoreBundle\Entity\Competence;

class Competences implements FixtureInterface {
	
	public function load(ObjectManager $manager) {
		$noms = array('Doctrine', 'Formulaire', 'Twig');
		
		foreach($noms as $i => $nom) {
			$liste_competences[$i] = new Competence();
			$liste_competences[$i]->setNom($nom);

			$manager->persist($liste_competences[$i]);
		}
		
		$manager->flush();
	}

}

?>