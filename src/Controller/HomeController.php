<?php

namespace App\Controller;

class HomeController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        if(!isset($_SESSION['user'])){
            header('Location:/security/login');
        }
        return $this->twig->render('Home/index.html.twig');
    }
}
