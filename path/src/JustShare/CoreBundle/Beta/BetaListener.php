<?php

namespace JustShare\CoreBundle\Beta;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class BetaListener {
	protected $dateFin;
	protected $kernel;

	public function __construct($dateFin, $kernel) {
		$this->dateFin = new \DateTime($dateFin);
		$this->kernel = $kernel;
	}
	
	protected function displayBeta(Response $response, $joursRestant) {
		$content = $response->getContent();

		$html = '<span style="color: red; font-size: 0.5em;"> - Beta J - '.(int) $joursRestant.'</span>';
		if (!$this->kernel->isDebug()) { $html = ""; } // affichage seulement en mode debug

		$content = preg_replace('#<h1>(.*?)</h1>#iU', '<h1>$1'.$html.'</h1>', $content, 1);

		$response->setContent($content);

		return $response;
	}

	public function onKernelResponse(FilterResponseEvent $event) {
		if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType()) {
			return;
		}

		$response = $event->getResponse();

		$joursRestant = $this->dateFin->diff(new \DateTime())->days;

		if ($joursRestant > 0) {
			$response = $this->displayBeta($response, $joursRestant);
		}

		$event->setResponse($response);
	}
}

?>