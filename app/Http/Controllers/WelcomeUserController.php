<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name, $nickname = null)
    {
        $name = ucfirst($name);
        if ($nickname){
            return "Bienvenido felipe, tu apodo es pipe";
        }else{
            return "Bienvenido felipe, no tienes apodos";
        }
    }
}
