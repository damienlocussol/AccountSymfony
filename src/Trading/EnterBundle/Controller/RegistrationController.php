<?php

namespace Trading\EnterBundle\Controller;

use Trading\EnterBundle\Form\UserType;
use Trading\DiaryBundle\Entity\User;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RegistrationController extends Controller
{
	public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
	{
        $user = new User();
        $formRegister = $this->createForm(UserType::class, $user);

        $formRegister->handleRequest($request);

        if ($formRegister->isSubmitted() && $formRegister->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setRoles(array('ROLE_USER'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $user = $formRegister->getData();
            $this->authenticateUser($user);

            return $this->redirectToRoute('home', array(
            	'username' => $user->getUsername()
            ));
        }

        return $this->render(
            '::register.html.twig',
            array('formRegister' => $formRegister->createView())
        );
    }

    private function authenticateUser(UserInterface $user)
    {
        $providerKey = 'main';
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

        $this->container->get('security.token_storage')->setToken($token);
    }  


}