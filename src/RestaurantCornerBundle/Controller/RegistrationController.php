<?php

namespace RestaurantCornerBundle\Controller;

use DateTime;
use RestaurantCornerBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use RestaurantCornerBundle\Form\UserType;

class RegistrationController extends Controller
{
    /**
     * @Route("/{_locale}/register", name="register")
     */
    public function registerAction(Request $request)
    {
        $user = new Users();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            // Set their role
            $user->setRole('ROLE_USER');
            $user->setName($user->getUsername());
            //other information
            $user->setCreateddate(new DateTime());
            $user->setSalt($password);
            $user->setIsactive(false);
            $user->setConfirmtoken("");//TODO
            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }
        return $this->render('RestaurantCornerBundle:Registration:register.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Route("/{_locale}/register/restaurer", name="restaurer")
     */
    public function registeRestaurerAction(Request $request)
    {
        die("registeRestaurerAction");
        $user = new Users();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            // Set their role
            $user->setRoles('ROLE_RESTAURER');
            //other information
            $user->setCreateddate(new DateTime());
            $user->setSalt($password);
            $user->setIsactive(false);
            $user->setConfirmtoken("");//TODO
            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }
        return $this->render('RestaurantCornerBundle:Registration:register_restaurer.html.twig', array('form' => $form->createView(),));
    }

}
