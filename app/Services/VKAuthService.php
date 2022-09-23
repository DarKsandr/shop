<?php

namespace App\Services;

use App\Models\User;
use VK\OAuth\VKOAuth;
use VK\OAuth\VKOAuthDisplay;
use VK\OAuth\VKOAuthResponseType;
use VK\OAuth\Scopes\VKOAuthUserScope;

class VKAuthService{
    public function get_link(){
        $oauth = new VKOAuth();
        $client_id = env("VK_CLIENT_ID", false);
        if($client_id){
            $redirect_uri = route("vk.login"); 
            $display = VKOAuthDisplay::PAGE;
            $scope = array(VKOAuthUserScope::WALL, VKOAuthUserScope::GROUPS, VKOAuthUserScope::EMAIL);
            $vk = $oauth->getAuthorizeUrl(VKOAuthResponseType::CODE, $client_id, $redirect_uri, $display, $scope);
        }
        return $vk ?? false;
    }

    public function get_user(VKService $service){
        $user = User::orWhere("vk_id", $service->getUserId())->orWhere("email", $service->getEmail())->first();
        if(empty($user)){
            $userInfo = $service->getUserInfo("first_name,last_name");
            $user = User::factory()->create([
                "name" => $userInfo[0]["first_name"]." ".$userInfo[0]["last_name"],
                "email" => $service->getEmail(),
                "vk_id" => $service->getUserId(),
            ]);
        } else {
            if(empty($user->vk_id)){
                $user->update(["vk_id" => $service->getUserId()]);
            }
        }
        return $user;
    }
}