<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {

        $name = "Donal Trump";
        $age = "75";


        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];


        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $response = response()->json($data, 200);

        if (config('session.secure_cookie', true)) {
            $response->cookie('access_token', '123-XYZ', $minutes, $path, $domain, $secure, $httpOnly);
        } else {
            $response->cookie('access_token', '123-XYZ', $minutes, $path, $domain, false, $httpOnly);
        }

        return $response;
    }
}
