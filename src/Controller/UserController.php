<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use src\Entity\Users;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
    	$entityManager = $this->getDoctrine()->getManager();

    	$admin = new Users();
        $admin->setApiKey('abcdefghjaimelesapis');
        $admin->setPassword('password');
        $admin->SetEmail('deschaussettes@yopmail.com');

        $entityManager->persist($admin);
        $entityManager->flush();

        return new Response('Admin generated!');
    }
}
