<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace Trading\EnterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Trading\EnterBundle\Form\LoginType;
use Trading\DiaryBundle\Entity\User;

class SecurityController extends Controller
{
  public function loginAction(Request $request)
  {
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('home');
    }

    $authUtils = $this->get('security.authentication_utils');
    $error = $authUtils->getLastAuthenticationError();
    $lastUsername = $authUtils->getLastUsername();

    $user = new User();
    $formLogin = $this->createForm(LoginType::class, $user);

    return $this->render('::login.html.twig', array(
      'last_username' => $lastUsername,
      'error'         => $error,
      'formLogin' => $formLogin->createView(),
    ));
  }
}
