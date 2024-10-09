<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::find(1);
        /*  User::query()->create([
            "name" => "Francisco",
            "email" => "a2@a.com",
            "password"=> "12345",
        ]); */

        //now()->diffForHumans();

       /*  $user->update(['email_verified_at'=> now()->subMonth(10)]);

        dd($user->email_verified_at); */

        return view("welcome");
    }
}
