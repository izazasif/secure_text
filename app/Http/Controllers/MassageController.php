<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ClientModel;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Redirect;
class MassageCOntroller extends Controller
{  
  

    public function index()
    {
        return view('client.massage');
    }

    public function MassLog(Request $request)
    { 
        
      
        $password = $request->input('password'); 
      // $users = DB::table('client')->select('slug')->where('password',Hash::check('password',$password))->get();
       $users = DB::table('client')->select('text')->where('password',$password)->get()->first();
     // dd($users);
      return view('client.index', ['users' => $users]);

     //return Redirect::route('clients.index')->with( ['users' => $users] );
   


    }
   
}
