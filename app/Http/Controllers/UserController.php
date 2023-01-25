<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == 1)
        {
            return redirect('/admin-dashboard');
        }
        
        return view('dashboard');
    }
}
