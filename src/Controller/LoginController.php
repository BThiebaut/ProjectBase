<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller
{
    /**
     * @Route("/_login", name="_login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'csrf_token' => true,
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/_login_check", name="login_check")
     */
    public function loginCheckAction(){

    }
}
