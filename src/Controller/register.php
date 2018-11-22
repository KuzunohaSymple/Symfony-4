<?php

namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class register extends AbstractController
{
    public function userRegister() {
        $lol = "Vous êtes bien enregistrer";
        return $this->render('register/register.html.twig');
    }
}