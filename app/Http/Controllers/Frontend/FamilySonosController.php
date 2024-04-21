<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilySonosController extends Controller
{
    public function create(){
        return view('frontend.pages.family-sonod.family-apply');
    }
}
