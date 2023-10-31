<?php

namespace App\Controller\Actions\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityGetAction extends AbstractController
{
    /**
     * @Route("/", name="app_security")
     */
    public function index(): Response
    {
        return $this->render('security/index.html.twig');
    }
}
