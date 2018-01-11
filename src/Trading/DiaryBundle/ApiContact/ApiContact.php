<?php

namespace Trading\DiaryBundle\ApiContact;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class ApiContact
{

   /**
   * Vérifie la connexion au compte
   *
   * @return array
   */

    public function availableAccount(){

       $client = new Client([
            'base_uri' => 'https://api.fxcm.com', 
            'timeout'  => 2.0,
        ]);

        try {

            $client->request('GET', 'subscribe');
            $err = true;
            $message = "Worked !";
            
        } catch (RequestException $e) {
            $err = false;
            $message = $e->getRequest();

        } catch (ClientException $e) {
            $err = false;
            $message = $e->getResponse()->getStatusCode();

        }catch (\Exception $e) {
            $err = false;
            $message = "Another reasons doesn't work";
        }

        return array('message' => $message, 'err' => $err);

    }


}



