<?php

namespace JustShare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use JustShare\CoreBundle\Entity\Article;
use JustShare\CoreBundle\Entity\Activity;
use JustShare\CoreBundle\Entity\Image;
use JustShare\CoreBundle\Entity\Commentaire;
use JustShare\CoreBundle\Entity\ArticleCompetence;
use JustShare\CoreBundle\Form\ArticleType;
use JustShare\CoreBundle\Form\ActivityType;
use JustShare\CoreBundle\Form\ArticleEditType;


class IndexController extends Controller {
	public function renderAction() {
		return $this->render("JustShareCoreBundle:Index:index.html.twig");
	}

	/*
	public function voirAction(Article $article) {
		$liste_articleCompetence = $this->getDoctrine()
										->getManager()
										->getRepository("JustShareCoreBundle:ArticleCompetence")
										->findByArticle($article->getId());

		return $this->render("JustShareCoreBundle:Test:voir.html.twig",
		array('article' => $article,
		      'liste_articleCompetence' => $liste_articleCompetence));
	}


	public function modifierAction(Article $article) {
		$formBuilder = $this->createFormBuilder($article);
		
		$form = $this->createForm(new ArticleEditType, $article);
	
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST') {
			$form->bind($request);
			
			if($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($article);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'Article bien modifié');
				
				return $this->render("JustShareCoreBundle:Test:voir.html.twig", 
				                     array('article' => $article));
			}
		}

		return $this->render('JustShareCoreBundle:Test:modifier.html.twig', 
		                     array('article' => $article,
							       'form' => $form->createView()));
	}

	public function supprimerAction(Article $article) {
		$form = $this->createFormBuilder()->getForm();
		
		$request = $this->get('request');
		
		if($request->getMethod() === 'POST') {
			$form->bind($request);

			if($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				
				$articleCompetences = $em->getRepository('JustShareCoreBundle:ArticleCompetence')
										 ->findByArticle($article);

				foreach($articleCompetences as $ac) {
					$em->remove($ac);
				}
				
				$em->remove($article);
				$em->flush();

				$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');

				return $this->redirect($this->generateUrl('justsharetest_accueil'));
			}
		}

		return $this->render('JustShareCoreBundle:Test:supprimer.html.twig',
		                     array('article' => $article,
							       'form' => $form->createView()));
	}


	private function findArticle($id) {
		$em = $this->getDoctrine()->getManager();
		
		$article = $em->getRepository('JustShareCoreBundle:Article')->find($id);

		if ($article === null) {
			throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
		}

		return $article;
	}
	*/
}