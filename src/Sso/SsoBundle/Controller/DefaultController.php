<?php

namespace Sso\SsoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SsoBundle:Default:index.html.twig');
    }
}
