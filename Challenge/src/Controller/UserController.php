<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends AbstractController
{

     /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $userlog = $this->getUser();
        if($userlog != null){
            return $this->redirectToRoute('login');
        }
        $lastUsername = $authenticationUtils -> getLastUsername();
        $error = $authenticationUtils->getLastAuthenticationError();

        if($error){
            $this -> addFlash('errors', 'erreur d\'authentification');
        }
        return $this->render('user/login.html.twig', [
            'lastUsername' => $lastUsername,
        ]);
    }

     /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {

    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        //$repository = $this->getDoctrine()->getRepository(Produit::class);
        //$produit = $repository->findAll();

        return $this->render('user/home.html.twig', [
            'controller_name' => 'UserController',
            //'produit' => $produit,
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add(): Response
    {
        return $this->render('user/add.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
