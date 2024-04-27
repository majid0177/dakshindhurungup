<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\WareshInfo;
use App\Models\Backend\Wareshgon;
use App\Models\Warish;
use App\Models\WarishgonInfo;

class WareshInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wareshes = WareshInfo::all();
        return view('backend.pages.wareshinfo.manage',compact('wareshes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.wareshinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'union'=>'required',
        //     'deadbody_value'=>'required',
        //     'deadbody_name'=>'required',
        //     'guardian'=>'required',
        //     'guardian_value'=>'required',
        //     'brother'=>'required',
        //     'brother_value'=>'required',
        // ]);
        // $waresh = new WareshInfo();
        // $waresh->union = $request->union;
        // $waresh->word_no = $request->word_no;
        // $waresh->village = $request->village;
        // $waresh->name = $request->name;
        // $waresh->deadbody_value = json_encode($request->deadbody_value);
        // $waresh->deadbody_name = $request->deadbody_name;
        // $waresh->son = $request->son;
        // $waresh->daughter = $request->daughter;
        // $waresh->guardian_value = json_encode($request->guardian_value);
        // $waresh->guardian = $request->guardian;
        // $waresh->brother_value = json_encode($request->brother_value);
        // $waresh->brother = $request->brother;
        // $waresh->total = $request->total;
        
        // $waresh->save();
        // $wareshId = $waresh->id;
        // return redirect()->route('wareshgon.create', $wareshId);
        // $wareshId = $waresh->id;
        // $wareshinfos = WareshInfo::find($wareshId);
        // return view('backend/pages/wareshgon/create', compact('wareshinfos'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singlewarish($id)
    {
        $waresh = WareshInfo::find($id);
        $wareshgons = Wareshgon::where('waresh_infoId', $id)->get();
        return view('backend/pages/wareshinfo/singlewarish',compact('waresh','wareshgons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $waresh = WareshInfo::find($id);
        return view('backend.pages.wareshinfo.edit',compact('waresh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $waresh = WareshInfo::find($id);
        $waresh->union = $request->union;
        $waresh->word_no = $request->word_no;
        $waresh->village = $request->village;
        $waresh->name = $request->name;
        $waresh->deadbody_value = json_encode($request->deadbody_value);
        $waresh->deadbody_name = $request->deadbody_name;
        $waresh->son = $request->son;
        $waresh->daughter = $request->daughter;
        $waresh->guardian_value = json_encode($request->guardian_value);
        $waresh->guardian = $request->guardian;
        $waresh->brother_value = json_encode($request->brother_value);
        $waresh->brother = $request->brother;
        $waresh->total = $request->total;
        $waresh->update();
        return redirect()->route('wareshinfo.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $waresh = WareshInfo::find($id);
       $waresh->delete();
       return redirect()->route('wareshinfo.manage');
    }
}
