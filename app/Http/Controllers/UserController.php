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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => base64_encode($data['email'])
        ]);
    }
    
    public function register(Request $request){
        //$this->validator($request->all())->validate();
        //event(new Registered($user = $this->create($request->all())));
        $data = array(
            'name' => 'test',
            'email' => rand() . 'kasunvmail@gmail.com',
            'password' => Hash::make('password'),
            'is_visible' => false,
            'is_active' => false,
            'status_id' => null,
            'short_title' => 'Test User'
        );
        //event(new Registered($user = $this->create($data)));
        //dispatch(new SendVerificationEmail($user));
        //return view('verification');
        //return view('login');
        ////////////////////////////////////////////////////////
        $user = $this->create($data);
        //new SendVerificationEmail($user);
        /*Mail::send('email.email', ['remember_token' => $user->remember_token], function ($m) use ($user) {
            $m->from('kasunvmail@gmail.com', 'Your Application');
            $m->to('kasunvmail@gmail.com', 'Kasun')->subject('Your Reminder!');
        });*/
        //Mail::to('kasunvmail@gmail.com')->send(new EmailVerification($user));
        $emailJob = (new SendVerificationEmail($user))->delay(Carbon::now()->addSeconds(3));
        dispatch($emailJob);
        //dispatch(new SendVerificationEmail($user));
        ////////////////////////////////////////////////////////
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
