<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function routeForRole()
    {

        $user = \Auth::user()->name;

        if($user == null) {
            return redirect('/');
        }
        else if($user == 'Super Admin') {
             return redirect()->route('superadmin');
        } 
        else if($user == 'Web Admin') {
            return redirect()->route('webadmin');
        } 
        else if($user == 'System Admin') {
            return redirect()->route('systemadmin');
        }
    }
}
