<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Nagorik;
use Image;
use File;

class NagorikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nagoriks = Nagorik::all();
        return view('backend.pages.nagorik.manage',compact('nagoriks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.nagorik.create');
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
            'name'=>'required',
            'village'=>'required',
        ]);
        $nagorik = new Nagorik();
        $nagorik->date = $request->date;
        $nagorik->name = $request->name;
        $nagorik->father_name = $request->father_name;
        $nagorik->mother_name = $request->mother_name;
        $nagorik->village = $request->village;
        $nagorik->postoffice = $request->postoffice;
        $nagorik->thana = $request->thana;
        $nagorik->zela = $request->zela;
        $nagorik->nagorikotto_union = $request->nagorikotto_union;
        $nagorik->word_no = $request->word_no;
        $nagorik->voterId_no = $request->voterId_no;
        $nagorik->dob_no = $request->dob_no;
        $nagorik->phone_no = $request->phone_no;
        $nagorik->dob = $request->dob;
        
        if($request->picture){
              $image = $request->file('picture');
              $customname = rand().'.'.$image->getClientOriginalExtension();
              $location = public_path('backend/nagorik/'.$customname);
              Image::make($image)->save($location);
              $nagorik->picture = $customname;
              $nagorik->save();
        }
        $nagorik->save();
        return redirect()->route('nagorik.manage');
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
        $nagorik = Nagorik::find($id);
        return view('backend.pages.nagorik.edit', compact('nagorik'));
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
        $nagorik = Nagorik::find($id);
        $nagorik->date = $request->date;
        $nagorik->name = $request->name;
        $nagorik->father_name = $request->father_name;
        $nagorik->mother_name = $request->mother_name;
        $nagorik->village = $request->village;
        $nagorik->postoffice = $request->postoffice;
        $nagorik->thana = $request->thana;
        $nagorik->zela = $request->zela;
        $nagorik->nagorikotto_union = $request->nagorikotto_union;
        $nagorik->word_no = $request->word_no;
        $nagorik->voterId_no = $request->voterId_no;
        $nagorik->dob_no = $request->dob_no;
        $nagorik->phone_no = $request->phone_no;
        $nagorik->dob = $request->dob;
        
        if(!empty($request->picture)){
            if(File::exists('backend/nagorik/'.$nagorik->picture)){
                File::delete('backend/nagorik/'.$nagorik->picture);
            }
              $image = $request->file('picture');
              $customname = rand().'.'.$image->getClientOriginalExtension();
              $location = public_path('backend/nagorik/'.$customname);
              Image::make($image)->save($location);
              $nagorik->picture = $customname;
              $nagorik->save();
        }
        $nagorik->update();
        return redirect()->route('nagorik.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nagorik = Nagorik::find($id);
        if(File::exists('backend/nagorik/'.$nagorik->picture)){
                File::delete('backend/nagorik/'.$nagorik->picture);
        }
        $nagorik->delete();
        return back();
    }
}
