<?php
namespace FinishmeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller {

	public function indexAction() {
		return $this->render('FinishmeBundle:Default:about.html.twig');
	}

}
