<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use VK\OAuth\VKOAuth;
use App\Actions\VKAction;
use VK\Client\VKApiClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class VKAuthController extends Controller
{
    public function login(Request $request, VKAction $action){
        $action->getToken($request->code);

        $request->session()->put("vk_access_token", $action->getAccessToken());

        if($action->isAccessToken()){

            $user = User::orWhere("vk_id", $action->getUserId())->orWhere("email", $action->getEmail())->first();
            if(empty($user)){
                $userInfo = $action->getUserInfo("first_name,last_name");
                $user = User::factory()->create([
                    "name" => $userInfo[0]["first_name"]." ".$userInfo[0]["last_name"],
                    "email" => $action->getEmail(),
                    "vk_id" => $action->getUserId(),
                ]);
            } else {
                if(empty($user->vk_id)){
                    $user->update(["vk_id" => $action->getUserId()]);
                }
            }
            Auth::login($user, true);
            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return redirect()->route("index");
        }
    }
}
