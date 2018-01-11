<?php
// src/Trading/EnterBundle/DataFixtures/ORM/LoadUser.php

namespace Trading\EnterBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trading\DiaryBundle\Entity\Broker;
// use Symfony\Component\DependencyInjection\ContainerAwareInterface;
// use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface
// , ContainerAwareInterface

{

      /**
     @var ContainerInterface
     */
    // private $container;

    /**
     * {@inheritDoc}
     */
    // public function setContainer(ContainerInterface $container = null)
    // {
    //     $this->container = $container;
    // }
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    // $listNames = array('Alexandre', 'Marine', 'Anna');
    // $listBroker = array('FXCM', 'IG', 'IB');

    // foreach ($listBroker as $broker) {
      // On crée l'utilisateur
      // $user = new User;
      $broker = new Broker;
      // Le nom d'utilisateur et le mot de passe sont identiques pour l'instant
      // $user->setUsername($name);
      // $hash = $this->container->get('security.password_encoder')->encodePassword($user, $name);
      // $user->setPassword($hash);
      // $user->setMail($name . '@' . $name .'.com');
      // On ne se sert pas du sel pour l'instant
      // $user->setSalt('');
      // On définit uniquement le role ROLE_USER qui est le role de base
      // $user->setRoles(array('ROLE_USER'));
      $broker->setName('Interactive Brokers');
      // On le persiste
      $manager->persist($broker);
    // }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}