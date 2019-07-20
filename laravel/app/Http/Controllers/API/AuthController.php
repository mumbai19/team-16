<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Config;


class AuthController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 1;
        $user->save();

    }
    public function hello(Request $request){
        return response(['data' => "hello"]);

    }


    public function login(Request $request){

        $client = new Client();
                $response = $client->request('POST', 'http://cfg.com/oauth/token', [
                    'form_params' => [
                        'grant_type' => 'password',
                        'client_id' => '2',
                        'client_secret' => 'YAoPn9sNIb4NVNwPqsSKmJS11zdvBP5oavakrGeN',
                        'username' => $request->email,
                        'password' => $request->password,
                    ],
                    'headers' =>[
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]

                ]);
                
        return response(['data' => json_decode((string) $response->getBody()->getContents(),true)]);

    }


}
