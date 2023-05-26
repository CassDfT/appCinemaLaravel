<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Log;

class logarController extends Controller
{
    public function logar(){
        return View('login');
    }
}
