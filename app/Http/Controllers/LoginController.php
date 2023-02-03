<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login.index');
    }
    public function check(Request $request){
        $data = request()->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $userInfo = DB::table('users')->where('name', '=', $request->name)->first();
        if (Auth::attempt($data)) {
            $request->session()->put('Logged', $userInfo->id);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('fail', 'Identifiants incorrects');
        }
    }
    public function logout(){
        if(session()->has('Logged')){
            Auth::logout();
            session()->pull('Logged');
            return redirect('/');
        }else{
            Auth::logout();
            return redirect('/');
        }
     
      
    }
        
    
}
