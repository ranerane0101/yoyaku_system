<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    private const GUEST_USER_ID = 11;


    public function guestLogin(){

        if (Auth::loginUsingId(self::GUEST_USER_ID)) {
        return redirect('/reservation');
    }

    return redirect('/reservation');
}

}
