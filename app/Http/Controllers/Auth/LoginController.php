<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function authenticated(Request $request, $user)
    {
        return redirect()->route('/contacts'); 
    }
}
