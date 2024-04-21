<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Peoples;
use App\Models\Sodosso;
class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples =Peoples::all();
        return view('backend.pages.peoples.managepeople',compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.peoples.addpeople');
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
        //     'area'=>'required',
        //     'union'=>'required',
        //     'upazila'=>'required',
        //     'district'=>'required',
        //     'holding'=>'required',
        //     'homeowner'=>'required',
        //     'fname'=>'required',
        //     'acessment'=>'required',
        //     'tax'=>'required',
        //     'hometype'=>'required'
        // ]);
        
        $people= new Peoples();
        
        $people->area = $res->area;
        $people->word = $res->word;
        $people->myunion = $res->union;
        $people->upazila = $res->upazila;
        $people->district = $res->district;
        $people->pageno = $res->pageno;
        $people->acessment = $res->acessment;
        $people->holding = $res->holding;
        $people->homeowner = $res->homeowner;
        $people->fname = $res->fname;
        $people->nid = $res->nid;
        $people->mobile = $res->mobile;
        $people->members = $res->members;
        $people->yearly = $res->yearly;
        $people->tax = $res->tax;
        $people->due = $res->due;
        $people->tubewell = $res->tubewell;
        $people->sanitation = $res->sanitation;
        $people->hometype = $res->hometype;
        $people->occupation = $res->occupation;
        $people->allowance = $res->allowance;
        $people->remark = $res->remark;
        // dd($people);
        $people->save();
        return redirect()->route('peoples.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peoples =Sodosso::find($id);
        return view('backend.pages.peoples.showpeople',compact('peoples'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples =Peoples::find($id);
        return view('backend.pages.peoples.editpeople',compact('peoples'));
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
        //  $res->validate([
        //     'area'=>'required',
        //     'union'=>'required',
        //     'upazila'=>'required',
        //     'district'=>'required',
        //     'holding'=>'required',
        //     'homeowner'=>'required',
        //     'fname'=>'required',
        //     'acessment'=>'required',
        //     'tax'=>'required',
        //     'hometype'=>'required'
        // ]);
        
        $people= Peoples::find($id);
        
        $people->area = $res->area;
        $people->word = $res->word;
        $people->myunion = $res->union;
        $people->upazila = $res->upazila;
        $people->district = $res->district;
        $people->pageno = $res->pageno;
        $people->acessment = $res->acessment;
        $people->holding = $res->holding;
        $people->homeowner = $res->homeowner;
        $people->fname = $res->fname;
        $people->nid = $res->nid;
        $people->mobile = $res->mobile;
        $people->members = $res->members;
        $people->yearly = $res->yearly;
        $people->tax = $res->tax;
        $people->due = $res->due;
        $people->tubewell = $res->tubewell;
        $people->sanitation = $res->sanitation;
        $people->hometype = $res->hometype;
        $people->occupation = $res->occupation;
        $people->allowance = $res->allowance;
        $people->remark = $res->remark;
        // dd($people);
        $people->update();
        return redirect()->route('peoples.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peoples =Peoples::find($id);
        $peoples->delete();
         return back();
    }
}
