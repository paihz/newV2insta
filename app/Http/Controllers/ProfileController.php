<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    public function createProfile(){ // tambah profile baru.
        return view('user.profile.profileAdd');
    }
    public function editProfile(){
    	return view('user.profile.profileUpdate');
    }
    public function changePass(){
        return view('user.profile.changePass');
    }
    public function updatePass(Request $request){
        $user = Auth::user();
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'confirmed|min:6',
        ]);
        if (Hash::check($request->current_password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

           $request->session()->flash('success', 'Great! Your current password has been changed');
           return back();

        } else {
            $request->session()->flash('error', 'Your current password invalid');
            return back();
        }
    }

}
