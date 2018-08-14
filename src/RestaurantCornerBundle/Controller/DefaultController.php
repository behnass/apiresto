<?php

namespace RestaurantCornerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use RestaurantCornerBundle\Form\UserType;
use RestaurantCornerBundle\Entity\Users;


class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", defaults={"_locale" = "fr"})
     * @Route("/{_locale}", name="homepage")
     */
    public function indexAction()
    {
        $helper = $this->get('security.authentication_utils');
        $user = new Users();
        $form_registry = $this->createForm(UserType::class, $user,array(
            'action' => $this->generateUrl('register'),
            'method' => 'POST',
        ));

        return $this->render('RestaurantCornerBundle:Default:index.html.twig' ,array(
            'last_username' => $helper->getLastUsername(),
            'errorAuth'         => $helper->getLastAuthenticationError(),
            'errorRegistry'         => $helper->getLastAuthenticationError(),
            'form' => $form_registry->createView(),
        ));
    }

}
