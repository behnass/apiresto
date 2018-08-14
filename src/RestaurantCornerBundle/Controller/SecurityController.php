<?php

namespace RestaurantCornerBundle\Controller;

use DateTime;
use RestaurantCornerBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use RestaurantCornerBundle\Form\UserType;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $helper = $this->get('security.authentication_utils');
        die("loginAction");
//
//        return $this->render('RestaurantCornerBundle:Security:login.html.twig' ,array(
//            'last_username' => $helper->getLastUsername(),
//            'error'         => $helper->getLastAuthenticationError(),
//        ));
    }

    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction(Request $request)
    {
    }

    /**
     * @Route("/{_locale}/logout", name="logout")
     */
    public function logoutAction()
    {
        die("logoutAction");
    }

}
