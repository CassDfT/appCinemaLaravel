<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Log;

class cadastroController extends Controller
{
    public function cadastro(){
        return View('cadastro');
    }
}
