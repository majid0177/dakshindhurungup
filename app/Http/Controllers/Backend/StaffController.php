<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Staff;
use Image;
use File;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff=Staff::all();
        return view('backend.pages.staff.managestaff', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.staff.addstaff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $res)
    {
        // $res->validate([
        //     'nid'=>'required',
        //     'name'=>'required',
        //     'surname'=>'required',
        //     'gram_word'=>'required',
        //     'mobile'=>'required'
        // ]);
        $stf= new Staff();
        $stf->name = $res->name;
        $stf->nid = $res->nid;
        $stf->surname = $res->surname;
        $stf->gram_word = $res->gram_word;
        $stf->mobile = $res->mobile;
        $stf->status = $res->status;

        if($res->pic){
            $image = $res->file('pic');
            $nameCustom=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/staff/'.$nameCustom);
            $check=Image::make($image)->save($location);
            $stf->pic=$nameCustom;
        }
        $stf->save();
        return redirect()->route('staff.manage')->with('success','কর্মকর্তা/কর্মচারী সফলভাবে যুক্ত হয়েছে ');
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
        $staffs=Staff::find($id);
        return view('backend.pages.staff.editstaff', compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $res, $id)
    {
      
        $stf= Staff::find($id);
        $stf->name = $res->name;
        $stf->nid = $res->nid;
        $stf->surname = $res->surname;
        $stf->gram_word = $res->gram_word;
        $stf->mobile = $res->mobile;
        $stf->status = $res->status;

        if($res->pic){
            if(File::exists('backend/staff/'.$stf->pic)){
            File::delete('backend/staff/'.$stf->pic);
            }
            $image = $res->file('pic');
            $nameCustom=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/staff/'.$nameCustom);
            $check=Image::make($image)->save($location);
            $stf->pic=$nameCustom;
        }
        $stf->update();
        return redirect()->route('staff.manage')->with("success", "কর্মকর্তা/কর্মচারী সফলভাবে হালনাগাদ হয়েছে ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $staff= Staff::find($id);
            if(File::exists('backend/staff/'.$staff->pic)){
                
                File::delete('backend/staff/'.$staff->pic);
            
            }
        $staff->delete();
        return back()->with("success","কর্মকর্তা/কর্মচারী সফলভাবে মুছেফেলা হয়েছে ");
    }
}
