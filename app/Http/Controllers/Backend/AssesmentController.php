<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Peoples;

class AssesmentController extends Controller
{
    
   public function assesment(){
       $all=Peoples::all();
       return view('backend.pages.report.assessmentreport',compact('all'));
   }
   public function byword($id){
       
       if($id=="" || $id=="সমস্ত তত্ত্ব"){
          $all=Peoples::all();
           return response()->json([
               "data" => $all
               ]); 
       }
       else{
           $all=Peoples::where('word',$id)->get();
           return response()->json([
               "data" => $all
               ]);
       }
       
   }
}
