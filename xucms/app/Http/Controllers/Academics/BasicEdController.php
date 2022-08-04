<?php

namespace App\Http\Controllers\Academics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicEdController extends Controller
{
    public function index(){
        return view ('academics.basic-ed');
        }
}
