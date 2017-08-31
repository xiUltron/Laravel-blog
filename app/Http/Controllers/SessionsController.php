<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requsets;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }
}
