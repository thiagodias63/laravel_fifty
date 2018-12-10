<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->all();
        $user = new User;
        $user->name = $data['name'];
        $user->password = $data['password'];
        $response = $user->login();
        return [ 'status' => ($response->pmLogged == 0) ? true : false];
    }
    
}