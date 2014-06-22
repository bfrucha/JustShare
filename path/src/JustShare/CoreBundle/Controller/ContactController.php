<?php

namespace JustShare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ContactController extends Controller { 
	public function renderAction() {
		$data = array('email' => '', 'text' => '');
		$form = $this->createFormBuilder()     // formulaire d'envoie de mail
					 ->add('email', 'email')
					 ->add('text', 'textarea')
					 ->getForm();

		$request = $this->getRequest();

		$send = false;  // permet à la vue de savoir si l'email a été envoyé

		if($request->getMethod() === 'POST') {
			$form->bind($request);      // récupère les informations du formulaire
			$data = $form->getData();   
			
            $message = \Swift_Message::newInstance()
				->setSubject('Assistance')
				->setFrom('bruno.fruchard@outlook.fr')
				->setTo('bruno.fruchard@outlook.fr')
				->setBody($this->renderView('JustShareCoreBundle:Contact:ack.txt.twig', 
				                            array('email' => $data['email'])));
			
			$this->get('mailer')->send($message);

			$send = true;
		}

		return $this->render("JustShareCoreBundle:Contact:contact.html.twig",
		                     array('form' => $form->createView(),
							       'send' => $send));
	}
} 


?>