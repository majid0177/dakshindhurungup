<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sodosso;
use Carbon\Carbon;

class SodossoController extends Controller
{
    function store(Request $request){
        Sodosso::updateOrCreate([
            'id' => $request->id ?? 0
        ],[
            'holding_number' => $request->holding_number,
            'khana_prodhaner_name' => $request->khana_prodhaner_name,
            'pitar_nam' => $request->pitar_nam,
           'matar_nam' => $request->matar_nam,
           'shamir_nam' => $request->shamir_nam,
           'nid' => $request->nid,
           'mobile' => $request->mobile,

           'jommo_tarik' => $request->jommo_tarik,
           'gender' => $request->gender,
           'dhormo' => $request->dhormo,
           'pesha' => $request->pesha,
           'jatiyota' => $request->jatiyota,
           'khanar_sodosso' => $request->khanar_sodosso,
           'sodosso_nari' => $request->sodosso_nari,
           'sodosso_purus' => $request->sodosso_purus,
           'sele' => $request->sele,
           'meye' => $request->meye,
           'batsorik_ay' => $request->batsorik_ay,
           'gram' => $request->gram,
           'word' => $request->word,
           'dakghor' => $request->dakghor,
           'thana' => $request->thana,

           'zela' => $request->zela,
           'barir_dhoron' => $request->barir_dhoron,
           'paka' => $request->paka,
           'adha_paka' => $request->adha_paka,
           'kacha' => $request->kacha,
           'artho_bosor' => $request->artho_bosor,
           'apnar_tax' => $request->apnar_tax,
           'note' => $request->note,
           'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'সদস্য সঠিকভাবে যোগ হয়েছে !',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
    public function edit($id)
    {
        $peoples =Sodosso::find($id);
        return view('backend.pages.peoples.addpeople',compact('peoples'));
    }
}
