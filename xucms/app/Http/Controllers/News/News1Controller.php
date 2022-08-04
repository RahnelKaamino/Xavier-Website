<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class News1Controller extends Controller
{
    public function index(){
        return view('news.news1');
    }
}
