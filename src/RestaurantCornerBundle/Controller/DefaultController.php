<?php

namespace RestaurantCornerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestaurantCornerBundle:Default:index.html.twig');
    }
}
