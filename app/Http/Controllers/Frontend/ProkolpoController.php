<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProkolpoController extends Controller
{
    public function Allprokolpo(){
        return view('frontend.pages.prokolpo.allprokolpos');
    }
}
