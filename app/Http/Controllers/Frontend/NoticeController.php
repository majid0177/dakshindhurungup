<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function Allnotice(){
        return view('frontend.pages.notice.allnotices');
    }
}
