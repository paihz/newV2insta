<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Profile;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $userID = Auth::id();
        $data['loginLast'] = date('d F, Y', strtotime(Auth::user()->last_login));
        $data['checkDB'] = DB::table('profiles')->where('user_id', '=', $userID )->exists();
   	
   return view('user.dashboard', $data);
    }
}
