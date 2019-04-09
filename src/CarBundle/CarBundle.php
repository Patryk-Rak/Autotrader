<?php

namespace CarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CarBundle extends Bundle
{
    /**
     * @Route("/cars")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Car.html.twig');
    }
}
