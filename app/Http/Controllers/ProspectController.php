<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prospect;
use App\Mail\ProspectEmail;

class ProspectController extends Controller
{
    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'lastname' => 'required|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email'
        ]);
        
        $user = Prospect::firstOrCreate(
            ['email' => $request['email']],
            ['name' => $request['name'],
            'lastname' => $request['lastname']]
        );

        if($user->wasRecentlyCreated){
            \Mail::to($user)->send(new ProspectEmail);
            return view('thanks');
        } else {
            return view('exist');
            }
    }
}
