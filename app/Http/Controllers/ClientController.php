<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function add () {


        return view ('clientform');

    }

    public function requestclients (Request $request): RedirectResponse{



            $validated = $request -> validate ([
                
              'name'=> 'required',
              'email'=>'required|email',
              'phone' => 'required|size:12',
              'address' =>'required|max:100',
              'companylogo'=> 'required|file|image|max:2048',
     
            ]);

            $companylogo = $request->file('companylogo');
            $filename = time() . '.' . $companylogo->getClientOriginalExtension();
            $path = $companylogo->storeAs('storage/company_logos', $filename, 'public');
    
            $client = new Client();
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->telephone = $request->input('phone');
            $client->address = $request->input('address');
            $client->company_logo = $path;
            $client->save();
     
             return redirect('/dashboard')->with('success', 'Login successful');
     
         
     
     

    }
    
}
