<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Staff;
use Illuminate\Http\Request;

class AllFrontend extends Controller
{
    // All Profile Method 
    public function profilechairman(){

        return view('frontend.pages.profile.chairman');
    }
    public function profilepanelchairman(){
        return view('frontend.pages.profile.panelchairman');
    }
    public function profilesochib(){
        return view('frontend.pages.profile.sochib');
    }
    public function profileupmembers(){
        return view('frontend.pages.profile.members');
    }
    public function Allprofile($id){
        $member  = Staff::findOrFail($id);
        return view('frontend.pages.profile.allprofile',compact('member'));
    }
    public function profilegrampolice(){
        $members  = Staff::where('surname','গ্রাম পুলিশ')->get();
        return view('frontend.pages.profile.grampolice',compact('members'));
    }
    public function profileothers(){
        return view('frontend.pages.profile.others');
    }
    
    
    public function upokarvogitalika(){
        return view('frontend.pages.upokarvogitalika.upokarvogitalika');
    }
}
