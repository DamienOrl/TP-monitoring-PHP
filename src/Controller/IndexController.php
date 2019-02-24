<?php 
	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;

	class IndexController extends AbstractController;

	/**
	 * @Route("/")
	 */
	public function index(){
		return $this->render('index.html.twig')
	}