<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Wareshgon;
use App\Models\Backend\WareshInfo;

class WareshgonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $wareshgons = Wareshgon::where('waresh_infoId',$id)->get();
        return response()->json([
            'data'=>$wareshgons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $wareshinfos = WareshInfo::find($id);
        return view('backend/pages/wareshgon/create', compact('wareshinfos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $wareshgon = new Wareshgon();
        $wareshgon->waresh_infoId = $request->waresh_infoId;
        $wareshgon->name = $request->name;
        $wareshgon->relation = $request->relation;
        $wareshgon->save();
        
        if($wareshgon){
            return response()->json([
                'msg'=>'ওয়ারেশ যুক্ত করা হয়েছে',
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
