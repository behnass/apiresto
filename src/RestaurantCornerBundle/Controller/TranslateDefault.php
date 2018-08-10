<?php

namespace MyApp\RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

namespace MyApp\RestoBundle\Controller;


class TranslateDefault extends Controller
{

    public function indexAction()
    {
        return $this->render('RestoBundle:Default:index.html.twig');
    }
}