<?php

namespace JustShare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller {
	public function renderAction() {
		return $this->render("JustShareCoreBundle:Menu:menu.html.twig");
	}
}

?>