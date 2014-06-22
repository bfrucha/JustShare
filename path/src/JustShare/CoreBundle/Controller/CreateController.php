<?php

namespace JustShare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JustShare\CoreBundle\Entity\Activity;
use JustShare\CoreBundle\Form\ActivityType;

class CreateController extends Controller {

	public function renderAction() {
		$activity = new Activity();
		
		$form = $this->createForm(new ActivityType, $activity);
		
		/*$request = $this->get('request');
		
		if($request->getMethod() == 'POST') {
			$form->bind($request);
			
			if($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($activity);
				$em->flush();
				
				return $this->render("JustShareCoreBundle:Test:voir.html.twig", 
				                     array('article'  => new Article(),
										   'activity' => $activity));
			}
		} */

		return $this->render("JustShareCoreBundle:Create:create.html.twig",
		                     array('form' => $form->createView()));
	}
}

?>