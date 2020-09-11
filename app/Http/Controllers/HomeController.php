<?php
use Illuminate\Support\Facades\Crypt;
namespace App\Http\Controllers;
use App\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Validator;
use \Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   
    public function store(Request $request)
    {   
        // $data = request()->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'message' => ['required', 'string', 'max:255'],
        // ]);
        // auth()->user()->client()->create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'message' => Hash::make($data['message']),
        // ]);
        $data = new ClientModel();
        $data->title = $request->input('title');
        $data->user_id = Auth::user()->id;
        $data->slug = SlugService::createSlug(ClientModel::class, 'slug', $request->title);
        $data->link = "http://localhost:8000/$data->slug/$data->title/$data->user_id";
        $data->password = $request->password;
        $data->text = Crypt::encryptString($request->text);
        $data->save(); 
        session()->flash('message', "Massage created in this link :$data->link");
        return redirect('/home');
      
    }

}
