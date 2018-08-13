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

        return $this->render('RestaurantCornerBundle:Security:login.html.twig' ,array(
            'last_username' => $helper->getLastUsername(),
            'error'         => $helper->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction(Request $request)
    {
//        $user = new Users();
//        $form = $this->createForm(UserType::class, $user);
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            // Encode the new users password
//            $encoder = $this->get('security.password_encoder');
//            $password = $encoder->encodePassword($user, $user->getPassword());
//            $user->setPassword($password);
//
//            // Save
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($user);
//            $em->flush();
//
//            return $this->redirectToRoute('AAlogin');
//        }else{
//            return $this->redirectToRoute('cwxcwcwxlogin');
//        }
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }

}
