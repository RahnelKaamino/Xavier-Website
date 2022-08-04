<?php

namespace App\Http\Controllers\Offices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SOCDEVController extends Controller
{
    public function index(){
        return view ('offices.socdev');
        }
}
