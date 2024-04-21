
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>খানা প্রধানের তথ্য </h4>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('sodosso.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
            <input type="hidden" name="id" id="id" value="{{ !empty($peoples) ? $peoples->id : 0 }}">
              
            <h4>ব্যক্তিগত তথ্য</h4>
            <div class="form-group">
              <label for="holding_number">হোল্ডিং নং </label> 
              <input type="text" required name="holding_number" id="holding_number" placeholder="হোল্ডিং নং  লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->holding_number : old('holding_number') }}">
              <span class="text-danger">
                @error('holding_number')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="khana_prodhaner_name">খানা প্রধানের নাম  </label> 
              <input type="text" name="khana_prodhaner_name" id="khana_prodhaner_name" placeholder="খানা প্রধানের নাম  লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->khana_prodhaner_name : old('khana_prodhaner_name') }}">
              </div>
             
          	 <div class="form-group">
              <label for="pitar_nam">পিত নাম</label> 
              <input type="text" required name="pitar_nam" id="pitar_nam" placeholder="পিত নাম লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->pitar_nam : old('pitar_nam') }}">
              <span class="text-danger">
                @error('pitar_nam')
                  {{ $message }}
                @enderror
              </span>
             </div>
             
          	 <div class="form-group">
              <label for="matar_nam">মাতার নাম</label> 
              <input type="text" name="matar_nam" id="matar_nam" placeholder="মাতার নাম লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->matar_nam : old('matar_nam') }}">
              <span class="text-danger">
                @error('matar_nam')
                  {{ $message }}
                @enderror
              </span>
             </div>
          	 <div class="form-group">
              <label for="shamir_nam">স্বামীর নাম</label> 
              <input type="text" name="shamir_nam" id="shamir_nam" placeholder="স্বামীর নাম লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->shamir_nam :old('shamir_nam') }}">
              <span class="text-danger">
                @error('shamir_nam')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="nid">ভোটার আইডি নং </label> 
              <input type="text" required name="nid" id="nid" placeholder="ভোটার আইডি নং লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->nid : old('nid') }}">
              <span class="text-danger">
                @error('nid')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="mobile">মোবাইল নং </label> 
              <input type="text" name="mobile" id="mobile" placeholder="মোবাইল নং  লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->mobile : old('mobile') }}">
              </div>
             <hr>
             <hr>
             <h4 >ঠিকানা</h4>
             <div class="form-group">
              <label for="gram">এলাকা/গ্রাম</label> 
              <input type="text" name="gram" id="gram" placeholder="এলাকা/গ্রাম লিখুন......" class="form-control" value="{{ !empty($peoples) ? $peoples->gram : old('gram') }}">
              </div>
            
          	 <div class="form-group">
              <label for="word">ওয়ার্ড নম্বর</label>
              <select name="word" id="word" class="form-control">
                      <option value="">----- ওয়ার্ড নম্বর সিলেক্ট করুন -----</option>
                      @if(!empty($peoples))
                      <option @if($peoples->word == "১") selected @endif value="১">১</option>
                      <option @if($peoples->word == "২") selected  @endif value="২" >২</option>
                      <option @if($peoples->word == "৩") selected  @endif value="৩">৩</option>
                      <option @if($peoples->word == "৪") selected  @endif value="৪">৪</option>
                      <option @if($peoples->word == "৫") selected  @endif value="৫">৫</option>
                      <option @if($peoples->word == "৬") selected  @endif value="৬">৬</option>
                      <option @if($peoples->word == "৭") selected  @endif value="৭">৭</option>
                      <option @if($peoples->word == "৮") selected  @endif value="৮">৮</option>
                      <option @if($peoples->word == "৯") selected  @endif value="৯">৯</option>
                      @else
                      <option  value="১">১</option>
                      <option value="২" >২</option>
                      <option value="৩">৩</option>
                      <option  value="৪">৪</option>
                      <option  value="৫">৫</option>
                      <option   value="৬">৬</option>
                      <option  value="৭">৭</option>
                      <option value="৮">৮</option>
                      <option value="৯">৯</option>
                      @endif
             </select>
             </div>  
            
          	 <div class="form-group">
              <label for="dakghor">ডাকঘর</label> 
              <input readonly type="text" name="dakghor" id="dakghor" class="form-control" value="ধুরুং">
              <span class="text-danger">
                @error('dakghor')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
          	 <div class="form-group">
              <label for="thana">উপজেলা</label> 
              <input readonly type="text" name="thana" id="thana" class="form-control" value="কুতুবদিয়া">
            </div>
            
          	 <div class="form-group">
              <label for="zela">জেলা </label> 
              <input readonly type="text" name="zela" id="zela" class="form-control" value="কক্সবাজার">
              </div>
              <div class="form-group">
                <label for="jommo_tarik">জম্ম তারিখ </label> 
                <input type="date" name="jommo_tarik" id="jommo_tarik" class="form-control" value="{{ !empty($peoples) ? $peoples->jommo_tarik : old('jommo_tarik') }}">
               </div>

               <div class="form-group">
                <label for="gender">লিঙ্গ </label> 
                <select name="gender" id="status" class="form-control">
                  <option value="">----- লিঙ্গ  সিলেক্ট করুন -----</option>
                  @if(!empty($peoples))
                  <option @if($peoples->gender == "পুরুষ") selected @endif value="পুরুষ">পুরুষ </option>
                  <option @if($peoples->gender == "নারী") selected @endif value="নারী">নারী</option>
                  <option @if($peoples->gender == "অন্যান্য") selected @endif value="অন্যান্য">অন্যান্য</option>
                  @else 
                  <option value="পুরুষ">পুরুষ </option>
                  <option value="নারী">নারী</option>
                  <option value="অন্যান্য">অন্যান্য</option>
                  @endif
                </select>
             </div>
          </div>
         
          <div class="col-sm-6 mt-4 ">
             <div class="form-group mt-2">
                <label for="dhormo">ধর্ম </label> 
                <select name="dhormo" id="status" class="form-control">
                  <option value="">----- ধর্ম  সিলেক্ট করুন -----</option>
                  @if(!empty($peoples))
                  <option @if($peoples->dhormo == "ইসলাম") selected @endif value="ইসলাম">ইসলাম </option>
                  <option @if($peoples->dhormo == "হিন্দু") selected @endif value="হিন্দু">হিন্দু</option>
                  <option @if($peoples->dhormo == "খ্রিস্টান") selected @endif value="খ্রিস্টান">খ্রিস্টান</option>
                  <option @if($peoples->dhormo == "বৌদ্ধ") selected @endif value="বৌদ্ধ">বৌদ্ধ </option>
                  <option @if($peoples->dhormo == "অন্যান্য") selected @endif value="অন্যান্য">অন্যান্য</option>
                  @else 
                  <option value="ইসলাম">ইসলাম </option>
                  <option value="হিন্দু">হিন্দু</option>
                  <option value="খ্রিস্টান">খ্রিস্টান</option>
                  <option value="বৌদ্ধ">বৌদ্ধ </option>
                  <option value="অন্যান্য">অন্যান্য</option>
                  @endif
                  
                </select>
             </div>

             <div class="form-group">
              <label for="pesha">পেশা  </label> 
              <input type="text" name="pesha" id="pesha" placeholder="পেশা লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->pesha : old('pesha') }}">
             </div>

             <div class="form-group">
              <label for="jatiyota">জাতীয়তা </label> 
              <input type="text" name="jatiyota" readonly id="jatiyota" placeholder="বাংলাদেশী" class="form-control" value="{{ !empty($peoples) ? $peoples->jatiyota : old('jatiyota') }}">
             </div>
             <div class="form-group">
              <label for="khanar_sodosso">খানার সদস্য</label>
              <div class="d-flex">
                <input class="mx-1 form-control" type="text" name="khanar_sodosso" id="khanar_sodosso" placeholder="" value="{{ !empty($peoples) ? $peoples->khanar_sodosso : old('khanar_sodosso') }}">
                <input class="mx-1 form-control" type="text" name="sodosso_purus" id="sodosso_purus" placeholder="পুরুষ" value="{{ !empty($peoples) ? $peoples->sodosso_purus : old('sodosso_purus') }}">
                <input class="mx-1 form-control" type="text" name="sodosso_nari" id="sodosso_nari" placeholder="নারী" value="{{ !empty($peoples) ? $peoples->sodosso_nari : old('sodosso_nari') }}">
              </div>
             </div>

             <div class="form-group">
              <label for="sontan">সন্তান সংখ্যা</label>
              <div class="d-flex">
                <input class="mx-1 form-control" type="text" name="sele" id="sele" placeholder="ছেলে " value="{{ !empty($peoples) ? $peoples->sele : old('sele') }}">
                <input class="mx-1 form-control" type="text" name="meye" id="meye" placeholder="মেয়ে" value="{{ !empty($peoples) ? $peoples->meye : old('meye') }}">
              </div>
             </div>
             <div class="form-group">
              <label for="batsorik_ay">বাৎসরিক আয় </label> 
              <input type="text" name="batsorik_ay" id="batsorik_ay" placeholder="বাৎসরিক আয় " class="form-control" value="{{ !empty($peoples) ? $peoples->batsorik_ay : old('batsorik_ay') }}">
             </div>
             
              <hr>
              <hr>
              <h4>বসত ঘর/অবকাঠামোর ধরণ</h4>

              <div class="form-group">
                <label for="barir_dhoron">বাড়ির ধরণ </label> 
                <select name="barir_dhoron" id="status" class="form-control">
                  <option value="">----- বাড়ির ধরণ সিলেক্ট করুন -----</option>
                  @if(!empty($peoples))
                  <option @if($peoples->barir_dhoron == "কাঁচা") selected @endif value="কাঁচা">কাঁচা</option>
                  <option @if($peoples->barir_dhoron == "সেমী পাকা") selected @endif value="সেমী পাকা">সেমী পাকা</option>
                  <option @if($peoples->barir_dhoron == "আধা পাকা") selected @endif value="আধা পাকা">আধা পাকা</option>n>
                  <option @if($peoples->barir_dhoron == "পাকা") selected @endif value="পাকা">পাকা</option>
                  @else 
                  <option value="কাঁচা">কাঁচা</option>
                  <option value="সেমী পাকা">সেমী পাকা</option>
                  <option value="আধা পাকা">আধা পাকা</option>n>
                  <option value="পাকা">পাকা</option>
                  @endif 
                  
                </select>
               </div>
               <div class="form-group">
                <label for="paka">পাকা ঘর</label> 
                <input type="text" name="paka" id="paka" placeholder="পাকা ঘর লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->paka : old('paka') }}">
                <span class="text-danger">
                  @error('paka')
                    {{ $message }}
                  @enderror
                </span>
               </div>
               <div class="form-group">
                <label for="adha_paka">আধা-পাকা ঘর</label> 
                <input type="text" name="adha_paka" id="adha_paka" placeholder="আধা-পাকা ঘর লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->adha_paka : old('adha_paka') }}">
              </div>
               <div class="form-group">
                <label for="kacha">কাঁচা ঘর</label> 
                <input type="text" name="kacha" id="kacha" placeholder="কাঁচা ঘর লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->kacha : old('kacha') }}">
              </div>
              <div class="form-group">
                <label for="artho_bosor">অর্থ বছর </label> 
                <select name="artho_bosor" id="status" class="form-control">
                  <option value="">----- অর্থ বছর  -----</option>
                  @if(!empty($peoples))
                  <option @if($peoples->artho_bosor == "2020-2021") selected @endif value="2020-2021">2020-2021</option>
                  <option @if($peoples->artho_bosor == "2021-2022") selected @endif value="2021-2022">2021-2022</option>
                  <option @if($peoples->artho_bosor == "2022-2023") selected @endif value="2022-2023">2022-2023</option>
                  <option @if($peoples->artho_bosor == "2023-2024") selected @endif value="2023-2024">2023-2024</option>
                  <option @if($peoples->artho_bosor == "2024-2025") selected @endif value="2024-2025">2024-2025</option>
                  <option @if($peoples->artho_bosor == "2025-2026") selected @endif value="2025-2026">2025-2026</option>
                  <option @if($peoples->artho_bosor == "2026-2027") selected @endif value="2026-2027">2026-2027</option>
                  <option @if($peoples->artho_bosor == "2027-2028") selected @endif value="2027-2028">2027-2028</option>
                  <option @if($peoples->artho_bosor == "2028-2029") selected @endif value="2028-2029">2028-2029</option>
                  <option @if($peoples->artho_bosor == "2029-2030") selected @endif value="2029-2030">2029-2030</option>
                  <option @if($peoples->artho_bosor == "2030-2031") selected @endif value="2030-2031">2030-2031</option>
                  @else 
                  <option value="2020-2021">2020-2021</option>
                  <option value="2021-2022">2021-2022</option>
                  <option value="2022-2023">2022-2023</option>
                  <option value="2023-2024">2023-2024</option>
                  <option value="2024-2025">2024-2025</option>
                  <option value="2025-2026">2025-2026</option>
                  <option value="2026-2027">2026-2027</option>
                  <option value="2027-2028">2027-2028</option>
                  <option value="2028-2029">2028-2029</option>
                  <option value="2029-2030">2029-2030</option>
                  <option value="2030-2031">2030-2031</option>
                  @endif
                  
                </select>
               </div>
               <h4>ট্যাক্স/মন্তব্য </h4>
               
                <div class="form-group">
                <label for="apnar_tax">ইউপি কর্তৃক ট্যাক্স </label> 
                <input type="text" name="apnar_tax" id="apnar_tax" placeholder="ইউপি কর্তৃক ট্যাক্স  লিখুন ......" class="form-control" value="{{ !empty($peoples) ? $peoples->apnar_tax : old('apnar_tax') }}">
                <span class="text-danger">
                  @error('apnar_tax')
                    {{ $message }}
                  @enderror
                </span>
               </div>
                <div class="form-group">
                  <label for="note">মন্তব্য  </label> 
                  <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ !empty($peoples) ? $peoples->note : old('note') }}</textarea>
               </div>
              <div class="form-group">
                <button class="form-control btn btn-info w-50" >যোগ করুন</button>
              </div>
            </div>
          </div>
          
          <div class="row">
            
            
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection