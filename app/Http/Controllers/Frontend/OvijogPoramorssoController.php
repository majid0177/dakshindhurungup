<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OvijogPoramorssoController extends Controller
{
    public function createFrontend(){
        return view('frontend.pages.ovijogporamosso.create');
    }
}
