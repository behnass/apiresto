<?php

namespace RestaurantCornerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", defaults={"_locale" = "fr"})
     * @Route("/{_locale}")
     */
    public function indexAction()
    {
        return $this->render('RestaurantCornerBundle:Default:index.html.twig');
    }
}
