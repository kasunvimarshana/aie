<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
//use \Auth;
use \Response;

class HomeController extends Controller
{
    //
    public function showDashboard(){
        if(view()->exists('admin.home')){
            return View::make('admin.home', array());
        }
    }
}
