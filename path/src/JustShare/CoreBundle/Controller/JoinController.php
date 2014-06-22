<?php

namespace JustShare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JoinController extends Controller {
	public function renderAction() {
		$em = $this->getDoctrine()->getManager();
		$categories = $em->createQuery(
			"SELECT c FROM JustShareCoreBundle:Categories c ORDER BY c.name ASC"
		)->getResult();   // trie les catégories par ordre alphabétique
		
		$choices = array(0 => "Toute");           // tableau des catégories dont sera composé le menu à choix mulptiples
		foreach($categories as $key => $value) {
			$choices[$key + 1] = ucwords($value->getName());
		}

		$form = $this->createFormBuilder()
					 ->add('categories', 'choice', array('choices' => $choices))
					 ->add('date', 'text')
					 ->add('place', 'text')
					 ->getForm();
		
		return $this->render("JustShareCoreBundle:Join:join.html.twig",
                        	 array('activities' => null,
		                           'form' => $form->createView()));
	}
}

?>