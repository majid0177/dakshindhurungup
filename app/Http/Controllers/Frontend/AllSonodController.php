<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllSonodController extends Controller
{
    public function create(){
        return view('frontend.pages.allsonod.allsonod-apply');
    }
}
