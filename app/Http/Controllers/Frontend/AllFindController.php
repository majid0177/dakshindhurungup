<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sodosso;
use Illuminate\Http\Request;

class AllFindController extends Controller
{
    public function HoldingFindFromFrontend(Request $request)
    {
        if(!empty($request->nid)){
            $sodosso =Sodosso::where('nid',$request->nid)->first();
        }
        else{
            $sodosso = '';
        }
        return view('frontend.pages.allfind.holding-find',compact('sodosso'));
    }
    public function WarishsonodFromFrontend(Request $request)
    {
        if(!empty($request->nid)){
            $sodosso =Sodosso::where('nid',$request->nid)->first();
        }
        else{
            $sodosso = '';
        }
        return view('frontend.pages.allfind.warishsonod-find',compact('sodosso'));
    }
    public function familysonodFromFrontend(Request $request)
    {
        if(!empty($request->nid)){
            $sodosso =Sodosso::where('nid',$request->nid)->first();
        }
        else{
            $sodosso = '';
        }
        return view('frontend.pages.allfind.familysonod-find',compact('sodosso'));
    }
    public function allsonodFromFrontend(Request $request)
    {
        if(!empty($request->nid)){
            $sodosso =Sodosso::where('nid',$request->nid)->first();
        }
        else{
            $sodosso = '';
        }
        return view('frontend.pages.allfind.allsonod-find',compact('sodosso'));
    }
    public function upokarvugiFromFrontend(Request $request)
    {
        if(!empty($request->nid)){
            $sodosso =Sodosso::where('nid',$request->nid)->first();
        }
        else{
            $sodosso = '';
        }
        return view('frontend.pages.allfind.upokarvugi-find',compact('sodosso'));
    }
    public function citizencharter()
    {
        return view('frontend.pages.citizencharter');
    }
    public function photogallery()
    {
        return view('frontend.pages.photogallery');
    }
    public function videogallery()
    {
        return view('frontend.pages.videogallery');
    }
}
