<?php
use Illuminate\Support\Facades\Crypt;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class ClientMassController extends Controller
{  
   

    public function index()
    {
        // $users = DB::table('client')->select('text')->get()->first();
        // return view('client.index', ['users' => $users]);

    }
}
