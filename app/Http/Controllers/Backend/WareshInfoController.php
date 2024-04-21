<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\WareshInfo;
use App\Models\Backend\Wareshgon;
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
        $request->validate([
            'union'=>'required',
            'deadbody_value'=>'required',
            'deadbody_name'=>'required',
            'guardian'=>'required',
            'guardian_value'=>'required',
            'brother'=>'required',
            'brother_value'=>'required',
        ]);
        $waresh = new WareshInfo();
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
        
        $waresh->save();
        $wareshId = $waresh->id;
        return redirect()->route('wareshgon.create', $wareshId);
        // $wareshId = $waresh->id;
        // $wareshinfos = WareshInfo::find($wareshId);
        // return view('backend/pages/wareshgon/create', compact('wareshinfos'));
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
