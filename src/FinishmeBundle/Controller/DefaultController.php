<?php
namespace FinishmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction() {
		$em = $this->getDoctrine()->getManager();
		
		// TODO sort by created DESC
		// TODO limit to 5 last projects
		$last_projects = $em->getRepository('FinishmeBundle:Project')->findAll();
		
		return $this->render('FinishmeBundle:Default:index.html.twig', array(
				'entities' => $last_projects,
		));
	}
}