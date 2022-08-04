<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class News6Controller extends Controller
{
    public function index(){
        return view('news.news6');
    }
}
