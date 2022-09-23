<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Services\VKAuthService;
use App\Services\VKService;

class VKAuthController extends Controller
{
    public function login(Request $request, VKService $vk_service, VKAuthService $vk_auth_service){
        $vk_service->getToken($request->code);

        $request->session()->put("vk_access_token", $vk_service->getAccessToken());

        if($vk_service->isAccessToken()){
            Auth::login($vk_auth_service->get_user($vk_service), true);
            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return redirect()->route("index");
        }
    }
}
