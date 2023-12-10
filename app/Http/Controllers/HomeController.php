<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    function index(){
        if (! Gate::allows('isUser')) {
            abort(403);
        }

        // Update the post...

        return redirect('/dashboard');
    }
}
