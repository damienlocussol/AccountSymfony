<?php

namespace Trading\DiaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountsController extends Controller
{

    public function accountsAction(){

        return $this->render('::/accounts.html.twig');
    }
   

}



