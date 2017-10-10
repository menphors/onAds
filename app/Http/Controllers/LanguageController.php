<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Input;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class LanguageController extends Controller
{
    public function index(){
        if(!Session::has('locale'))
        {
            \Session::put('locale', Input::get('locale'));
        }else{
            \Session::put('locale', Input::get('locale'));
        }
        return Redirect::back();
    }
}
