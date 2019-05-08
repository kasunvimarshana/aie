<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    //private $authUser;
    
    function __construct(){}
    
    public function index(){}
    
    public function showLogin(){
        if( auth()->check() ){
            return redirect()->route('home.showDashboard');
        }else if( view()->exists('login') ){
            return View::make('login');
        }
    }
    
    public function doLogin(){
        $rules = array(
            'email'    => 'required',
            'password' => 'required|min:3'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        if($validator->fails()){
            return redirect()->route('login.showLogin')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
        }else{
            $email = Input::get('email');
            $password = Input::get('password');
            
            $credentials = array(
                'email' => $email,
                'password' => $password,
                'is_active' => true
            );
            
            Auth::attempt($credentials);
                
            if( auth()->check() ){
                return redirect()->route('home.showDashboard');
            }else{
                return redirect()->route('login.showLogin')->withInput(Input::except('password'));
            }
        }
        
    }
    
    public function doLogout(){
        Auth::logout();
        return redirect()->route('login.showLogin');
    }
 
}
