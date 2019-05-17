<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
//use Mail;
//use App\Mail\EmailVerification;
use App\Jobs\SendVerificationEmail;
use Carbon\Carbon;

class UserController extends Controller
{
    //
    protected function create(array $data){
        return User::save([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => base64_encode($data['email'])
        ]);
    }
    
    public function register(Request $request){
        $data = array(
            'name' => 'test',
            'email' => 'kasunvmail@gmail.com',
            'password' => Hash::make('password'),
            'is_visible' => false,
            'is_active' => false,
            'status_id' => null,
            'short_title' => 'Test User'
        );
        
        //$user = $this->create($data);
        $user = $this->create($data);
        
        $emailJob = (new SendVerificationEmail($user))->delay(Carbon::now()->addSeconds(10));
        dispatch($emailJob);
    }
    
    public function verify($token){
        $user = User::where('remember_token', $token)->first();
        $user->is_active = true;
        if($user->save()){
            //return view('emailconfirm',['user'=>$user]);
            return view('login',['user'=>$user]);
        }
    }
    
}
