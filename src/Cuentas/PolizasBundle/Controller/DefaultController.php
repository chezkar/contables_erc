<?php

namespace Cuentas\PolizasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Polizas/Default/index.html.twig');
    }
}
