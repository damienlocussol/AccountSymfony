<?php

namespace Trading\DiaryBundle\Controller;

use Trading\DiaryBundle\Form\AccountType;
use Trading\DiaryBundle\Entity\Account;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class UserController extends Controller
{

    public function userAction(){

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('TradingDiaryBundle:Account')
        ;

        $accounts = $repository->findBy(
            array('user' => $this->getUser())
        );

        $account = new Account();
        $formAccount = $this->createForm(AccountType::class, $account);

        return $this->render('::/user.html.twig', array(
            'formAccount' => $formAccount->createView(),
            'accounts' => $accounts,
        ));
    }

    public function addAction(Request $request){

        $account = new Account();
        $formAccount = $this->createForm(AccountType::class, $account);
        $formAccount->handleRequest($request);

        if($formAccount->isSubmitted() && $formAccount->isValid()){

            $tryAccount = $this->container->get('trading_diary.apicontact');

            $res = $tryAccount->availableAccount();

            if(!$res['err']){

                // $account->setIsUpdated(true);
                // $account->setLastUpdate(new \DateTime());
                // $account->setUser($this->getUser());
                // $em = $this->getDoctrine()->getManager();
                // $em->persist($account);
                // $em->flush();

            }
            // return new JsonResponse(array('message' => $res['message']), 200);

        }
        return new JsonResponse(array('message' => $res['message']), 200);
    }


}



