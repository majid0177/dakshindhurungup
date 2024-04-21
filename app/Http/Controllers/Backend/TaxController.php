<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Peoples;
use App\Models\Backend\Tax;
use App\Models\Sodosso;
use App\Models\Kor;
use Carbon\Carbon;
class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxs =Kor::all();
        return view('backend.pages.tax.managetax',compact('taxs'));
    }
    
    public function searchData($nid)
    {
        
        $info =Sodosso::where('nid',$nid)->get();
        
        if($info){
           return response()->json([
            "status"=>"success",
            "data"=>$info
            ]); 
        }
        else{
            return response()->json([
            "status"=>"no"
            ]);
        }
        
            
    }
    public function findforTax($nid)
    {
        
        $info =Sodosso::where('nid',$nid)->first();
        
        if($info){
           return response()->json([
            "status"=>"success",
            "data"=>$info
            ]); 
        }
        else{
            return response()->json([
            "status"=>"no"
            ]);
        }
        
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.tax.addtax');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $res)
    {
        $res->validate([
            'amount' => 'required',
            'sid' => 'required',
            'artho_bosor' => 'required',
            'paymentMethod' => 'required'
        ]);
        
        $sodosso = Sodosso::find($res->sid);
        $tax = Kor::where('sodosso_id', $res->sid)->first();
        
        if ($tax) { // If a record exists, update it directly.
            $kor = $tax; // Use the existing record for updates.
        } else {
            $kor = new Kor; // No record exists, create a new instance.
        }
        
        $kor->sodosso_id = $res->sid;
        
        if ($res->artho_bosor == 'orthobosor1') {
            $kor->orthobosor1 = '2024-2025';
            $kor->amount1 = $res->amount;
            $kor->payDate1 = Carbon::now();
            $kor->paymentMethod1 = $res->paymentMethod;
            $kor->note1 = $res->note ?? null; // Assuming 'note' might not be set and is nullable
            $kor->status1 = $sodosso->apnar_tax <= $res->amount ? 'paid' : 'due';
        } elseif ($res->artho_bosor == 'orthobosor2') {
            $kor->orthobosor2 = '2025-2026';
            $kor->amount2 = $res->amount;
            $kor->payDate2 = Carbon::now();
            $kor->paymentMethod2 = $res->paymentMethod;
            $kor->note2 = $res->note ?? null; // Assuming 'note' might not be set and is nullable
            $kor->status2 = $sodosso->apnar_tax <= $res->amount ? 'paid' : 'due';
        }elseif ($res->artho_bosor == 'orthobosor3') {
            $kor->orthobosor3 = '2026-2027';
            $kor->amount3 = $res->amount;
            $kor->payDate3 = Carbon::now();
            $kor->paymentMethod3 = $res->paymentMethod;
            $kor->note3 = $res->note ?? null; // Assuming 'note' might not be set and is nullable
            $kor->status3 = $sodosso->apnar_tax <= $res->amount ? 'paid' : 'due';
        }elseif ($res->artho_bosor == 'orthobosor4') {
            $kor->orthobosor4 = '2027-2028';
            $kor->amount4 = $res->amount;
            $kor->payDate4 = Carbon::now();
            $kor->paymentMethod4 = $res->paymentMethod;
            $kor->note4 = $res->note ?? null; // Assuming 'note' might not be set and is nullable
            $kor->status4 = $sodosso->apnar_tax <= $res->amount ? 'paid' : 'due';
        }elseif ($res->artho_bosor == 'orthobosor5') {
            $kor->orthobosor5 = '2028-2029';
            $kor->amount5 = $res->amount;
            $kor->payDate5 = Carbon::now();
            $kor->paymentMethod5 = $res->paymentMethod;
            $kor->note5 = $res->note ?? null; // Assuming 'note' might not be set and is nullable
            $kor->status5 = $sodosso->apnar_tax <= $res->amount ? 'paid' : 'due';
        }
        
        if ($tax) {
            $kor->save(); // Save changes for an existing record.
        } else {
            $kor->save(); // Save the new record.
        }
        // dd($res->artho_bosor);
        //  return redirect()->route('taxprint',$res->sid,$res->artho_bosor);
        return $this->taxprint($res->sid,$res->artho_bosor);
    }
    
    public function taxprint($id,$orthoBosor){
        $taxs=Kor::where('sodosso_id',$id)->first();
        return view('backend/pages/tax/taxprint',compact('taxs','orthoBosor'));
    }
    public function taxprint1($id){
        $orthoBosor= 'orthobosor1';
        $taxs=Kor::where('sodosso_id',$id)->first();
        return view('backend/pages/tax/taxprint',compact('taxs','orthoBosor'));
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
        $taxs =Kor::find($id);
        return view('backend.pages.tax.edittax',compact('taxs'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taxs =Tax::find($id);
        $taxs->delete();
        return back();
    }
}
