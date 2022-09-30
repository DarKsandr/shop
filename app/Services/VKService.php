<?php

namespace App\Services;

use VK\OAuth\VKOAuth;
use VK\Client\VKApiClient;

class VKService{

    private $vk;
    private $oauth;
    private $access_token = false;
    private $email;
    private $user_id;

    public function __construct(VKApiClient $vk, VKOAuth $oauth){
        $this->vk = $vk;
        $this->oauth = $oauth;
    }

    public function getToken(string $code){
        $client_id = config("vk.VK_CLIENT_ID");
        $client_secret = config("vk.VK_CLIENT_SECRET");
        $redirect_uri = route("vk.login");

        $response = $this->oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code);

        $this->access_token = $response["access_token"];
        $this->email = $response["email"];
        $this->user_id = $response["user_id"];
        return $response;
    }

    public function getAccessToken(){
        return $this->access_token;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function isAccessToken():Bool{
        return $this->access_token ? true : false;
    }

    public function getUserInfo($fields){
        return $this->vk->users()->get($this->access_token, [
            "fields" => $fields
        ]);
    }
}