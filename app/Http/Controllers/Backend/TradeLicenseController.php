<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\TradeLicense;

class TradeLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trades = TradeLicense::all();
        return view('backend/pages/tradeLicense/manage',compact('trades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/pages/tradeLicense/create');
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
            'organization_name'=>'required',
            'address'=>'required',
            'maliker_name'=>'required',
        ]);
        $trade = new TradeLicense();
        $trade->organization_name = $request->organization_name;
        $trade->address = $request->address;
        $trade->maliker_name = $request->maliker_name;
        $trade->father_name = $request->father_name;
        $trade->village = $request->village;
        $trade->postoffice = $request->postoffice;
        $trade->thana = $request->thana;
        $trade->zela = $request->zela;
        $trade->present_business = $request->present_business;
        $trade->license_fee = $request->license_fee;
        $trade->bokeya = $request->bokeya;
        $trade->jorimana = $request->jorimana;
        $trade->nobayon_fee = $request->nobayon_fee;
        $trade->vat = $request->vat;
        $trade->total = $request->total;
        $trade->expire_date = $request->expire_date;
        $trade->save();
        return redirect()->route('tradelicense.manage');
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
        $trade = TradeLicense::find($id);
        return view('backend/pages/tradeLicense/edit', compact('trade'));
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
        $trade = TradeLicense::find($id);
        $trade->organization_name = $request->organization_name;
        $trade->address = $request->address;
        $trade->maliker_name = $request->maliker_name;
        $trade->father_name = $request->father_name;
        $trade->village = $request->village;
        $trade->postoffice = $request->postoffice;
        $trade->thana = $request->thana;
        $trade->zela = $request->zela;
        $trade->present_business = $request->present_business;
        $trade->license_fee = $request->license_fee;
        $trade->bokeya = $request->bokeya;
        $trade->jorimana = $request->jorimana;
        $trade->nobayon_fee = $request->nobayon_fee;
        $trade->vat = $request->vat;
        $trade->total = $request->total;
        $trade->expire_date = $request->expire_date;
        $trade->update();
        return redirect()->route('tradelicense.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trade = TradeLicense::find($id)->delete();
        return redirect()->route('tradelicense.manage');
    }
}
