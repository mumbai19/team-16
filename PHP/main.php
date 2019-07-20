<?php
require 'vendor/autoload.php';
include 'connection.php';
// include 'cipher.php';
// include 'PHPMailer/message.php';
// include 'PHPMailer/mail.php';
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp as GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\Psr7\Request as GuzzleRequest;

if (isset($_POST['Login'])) {

    $client = new Client;
                $response = $client->request('POST', 'http://fcfg.com/oauth/token', [
                    'form_params' => [
                        'grant_type' => 'password',
                        'client_id' => '2',
                        'client_secret' => 'nOAj3cdcKguorFZdlrisBzaSD0MxfHMV7VgKAqJJ',
                        'username' => "r@123.com",
                        'password' => "123",
                    ],
                    'headers' =>[
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]

                ]);
        $array = json_decode(json_encode(json_decode($response->getBody()->getContents())), True);                                
        print_r($array);                        
        echo($array['access_token']);



}


?>