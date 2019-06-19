<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #Deactivate auth for interface web
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'guest']);
        // auth()->user()->assignRole('admin');
        // get the names of the user's roles
        if (Auth::check()) {
            if (auth()->user()->hasRole('admin')) {
                return view('home');
            } else {
                return view('interface');
            }
        } else {
            return view('interface');
        }
    }
}
