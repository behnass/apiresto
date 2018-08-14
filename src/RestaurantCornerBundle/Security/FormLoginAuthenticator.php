<?php
/**
 * Created by PhpStorm.
 * User: ABEHNASS
 * Date: 10/08/2018
 * Time: 17:46
 */

namespace RestaurantCornerBundle\Security;


use RestaurantCornerBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface ;

class FormLoginAuthenticator extends AbstractFormLoginAuthenticator
{
    private $router;
    private $encoder;
    private $em;

    public function __construct(RouterInterface $router, UserPasswordEncoderInterface $encoder, EntityManagerInterface  $em)
    {
        $this->router = $router;
        $this->encoder = $encoder;
        $this->em = $em;
    }

    public function getCredentials(Request $request)
    {
        if ($request->getPathInfo() != '/login_check') {
            return;
        }

        $username = $request->request->get('_username');
        $password = $request->request->get('_password');
        $request->getSession()->set(Security::LAST_USERNAME, $username);

        return [
            '_email' => $username,
            '_password' => $password,
        ];
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $email = $credentials['_email'];
        $username = $credentials['_email'];
        $object = $this->em->getRepository('RestaurantCornerBundle:Users')->findOneBy(['email' => $email]);
        if($object){
            return $object;
        }
        else{
            return $this->em->getRepository('RestaurantCornerBundle:Users')->findOneBy(['username' => $username]);
        }
//        return $userProvider->loadUserByUsername($email);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
//        die("checkCredentials");
        $plainPassword = $credentials['_password'];
        if ($this->encoder->isPasswordValid($user, $plainPassword))
        {
//            var_dump($user);
//            var_dump($plainPassword);
//            die("isPasswordValid");
            return true;
        }
        die("bad BadCredentialsException ");
        throw new BadCredentialsException();
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
//        die("onAuthenticationSuccess");
        $url = $this->router->generate('login');

        return new RedirectResponse($url);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
        var_dump($request->getSession()->getId(Security::AUTHENTICATION_ERROR));
        die("onAuthenticationFailure");
        $url = $this->router->generate('login');

        return new RedirectResponse($url);
    }

    protected function getLoginUrl()
    {
        die("getLoginUrl");
        return $this->router->generate('login');
    }

    protected function getDefaultSuccessRedirectUrl()
    {
        die("getDefaultSuccessRedirectUrl");
        return $this->router->generate('welcome');
    }

    public function supportsRememberMe()
    {
        return false;
    }
}