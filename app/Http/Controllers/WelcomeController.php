<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller {
    public function __invoke(Request $request){

        $user = User::find(1);

        dd($user);


        return view('welcome');
    }
}
