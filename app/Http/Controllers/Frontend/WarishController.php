<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Warish;
use App\Models\WarishgonInfo;
use Illuminate\Http\Request;

class WarishController extends Controller
{
    public function create(){
        return view('frontend.pages.warish.warish-apply');
    }
    public function store(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'organization_name'=>'required',
        //     'address'=>'required',
        //     'maliker_name'=>'required',
        // ]);
        $warish = new Warish;
        $warish->ap_name = $request->ap_name;
        $warish->nid = $request->nid;
        $warish->birth_id = $request->birth_id;
        $warish->father = $request->father;
        $warish->husband = $request->husband;
        $warish->mother = $request->mother;
        $warish->dob = $request->dob;
        $warish->dob = $request->dob;
        $warish->marital_status = $request->marital_status;
        $warish->mobile = $request->mobile;
        $warish->holding = $request->holding;
        $warish->ward = $request->ward;
        $warish->post_office = $request->post_office;
        $warish->village = $request->village;
        $warish->wr_name = $request->wr_name;
        $warish->wr_nid = $request->wr_nid;
        $warish->wr_father = $request->wr_father;
        $warish->wr_husband = $request->wr_husband;
        $warish->wr_mother = $request->wr_mother;
        $warish->wr_ward = $request->wr_word;
        $warish->wr_village = $request->wr_village;
        $warish->details = $request->details;
        $warish->save();

        $warishId = $warish->id;
        foreach($request->b_slno as $index => $value) {
            $warishgonInfo = new WarishgonInfo;
            $warishgonInfo->wr_id = $warishId; 
            $warishgonInfo->b_slno = $request->b_slno[$index]; // Use $index to access each item
            $warishgonInfo->b_name = $request->b_name[$index]; 
            $warishgonInfo->b_relation = $request->b_relation[$index]; 
            $warishgonInfo->b_nid = $request->b_nid[$index]; 
            $warishgonInfo->b_comments = $request->b_comments[$index]; 
            $warishgonInfo->save();
        }
        return back()->with('message', "save successfully");
    }
}
