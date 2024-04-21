
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>এলাকাবাসী </h4>
      <p class="mg-b-0">এলাকাবাসীর তালিকা লিপিবদ্ধ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('peoples.update',$peoples->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
              
             <!-- <div class="form-group">-->
             <!-- <label for="acessment">অ্যাসেসমেন্ট নং</label> -->
             <!-- <input type="text" name="acessment" id="acessment" placeholder="অ্যাসেসমেন্ট নং লিখুন......" class="form-control" value="{{ $peoples->acessment}}">-->
             <!-- <span class="text-danger">-->
             <!--   @error('acessment')-->
             <!--     {{ $message }}-->
             <!--   @enderror-->
             <!-- </span>-->
             <!--</div>-->

          	 <div class="form-group">
              <label for="area">এলাকা/গ্রাম</label> 
              <input type="text" name="area" id="area" placeholder="এলাকা/গ্রাম লিখুন......" class="form-control" value="{{ $peoples->area}}">
              <span class="text-danger">
                @error('area')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
          	 <div class="form-group">
              <label for="word">ওয়ার্ড নম্বর</label>
              <select name="word" id="word" class="form-control">
                      <option value="১">----- ওয়ার্ড নম্বর সিলেক্ট করুন -----</option>
                      <option value="১" @if($peoples->word == '১' ) selected @endif >১</option>
                      <option value="২" @if($peoples->word == '২' ) selected @endif >২</option>
                      <option value="৩" @if($peoples->word == '৩' ) selected @endif >৩</option>
                      <option value="৪" @if($peoples->word == '৪' ) selected @endif >৪</option>
                      <option value="৫" @if($peoples->word == '৫' ) selected @endif >৫</option>
                      <option value="৬" @if($peoples->word == '৬' ) selected @endif >৬</option>
                      <option value="৭" @if($peoples->word == '৭' ) selected @endif >৭</option>
                      <option value="৮" @if($peoples->word == '৮' ) selected @endif >৮</option>
                      <option value="৯" @if($peoples->word == '৯' ) selected @endif >৯</option>
             </select>
              <span class="text-danger">
                @error('word')
                  {{ $message }}
                @enderror
              </span>
             </div>  
            
          	 <div class="form-group">
              <label for="union">ইউনিয়ন</label> 
              <input readonly type="text" name="union" id="union" placeholder="ইউনিয়ন লিখুন ......" class="form-control" value="{{ $peoples->myunion}}">
              <span class="text-danger">
                @error('union')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
          	 <div class="form-group">
              <label for="upazila">উপজেলা</label> 
              <input readonly type="text" name="upazila" id="upazila" placeholder="উপজেলা লিখুন ......" class="form-control" value="{{ $peoples->upazila}}">
              <span class="text-danger">
                @error('upazila')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
          	 <div class="form-group">
              <label for="district">জেলা </label> 
              <input readonly type="text" name="district" id="district" placeholder="জেলা  লিখুন ......" class="form-control" value="{{ $peoples->district}}">
              <span class="text-danger">
                @error('district')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
          	 <div class="form-group">
              <label for="holding">হোল্ডিং নং </label> 
              <input type="text" name="holding" id="holding" placeholder="হোল্ডিং নং  লিখুন ......" class="form-control" value="{{ $peoples->holding}}">
              <span class="text-danger">
                @error('holding')
                  {{ $message }}
                @enderror
              </span>
             </div>
             
          	 <div class="form-group">
              <label for="homeowner">বাড়ির মালিকের নাম </label> 
              <input type="text" name="homeowner" id="homeowner" placeholder="বাড়ির মালিকের নাম  লিখুন ......" class="form-control" value="{{ $peoples->homeowner}}">
              <span class="text-danger">
                @error('homeowner')
                  {{ $message }}
                @enderror
              </span>
             </div>
             
          	 <div class="form-group">
              <label for="fname">পিত/স্বামীর নাম</label> 
              <input type="text" name="fname" id="fname" placeholder="পিত/স্বামীর নাম লিখুন ......" class="form-control" value="{{ $peoples->fname}}">
              <span class="text-danger">
                @error('fname')
                  {{ $message }}
                @enderror
              </span>
             </div>
             
          	 <div class="form-group">
              <label for="nid">জাতীয় পরিচয় পত্রের নম্বর</label> 
              <input type="text" name="nid" id="nid" placeholder="জাতীয় পরিচয় পত্রের নম্বর লিখুন ......" class="form-control" value="{{ $peoples->nid}}">
              <span class="text-danger">
                @error('nid')
                  {{ $message }}
                @enderror
              </span>
             </div>
              <a href="{{ url('/admin/peoples/manage') }}" class="btn btn-warning w-50 float-right"><i class="fas fa-backward"></i> Back</a>
            </div>
            <div class="col-sm-6">
                
                <!--<div class="form-group">-->
                <!--    <label for="mobile">মোবাইল নং </label> -->
                <!--    <input type="text" name="mobile" id="mobile" placeholder="মোবাইল নম্বর লিখুন ......" class="form-control" value="{{ $peoples->mobile}}">-->
                <!--    <span class="text-danger">-->
                <!--      @error('mobile')-->
                <!--        {{ $message }}-->
                <!--      @enderror-->
                <!--    </span>-->
                <!--   </div>-->
                   
                     <div class="form-group">
                    <label for="members">পরিবারের সদস্য সংখ্যা </label> 
                    <input type="text" name="members" id="members" placeholder="পরিবারের সদস্য সংখ্যা  লিখুন ......" class="form-control" value="{{ $peoples->members}}">
                    <span class="text-danger">
                      @error('members')
                        {{ $message }}
                      @enderror
                    </span>
                   </div>
      
                   
                     <div class="form-group">
                    <label for="tubewell">নলকূপ</label> 
                    <select name="tubewell" id="tubewell" class="form-control">
                      <option value="">----- নলকূপ সিলেক্ট করুন -----</option>
                      <option value="হ্যাঁ" @if($peoples->tubewell == 'হ্যাঁ' ) selected @endif >হ্যাঁ </option>
                      <option value="না" @if($peoples->tubewell == 'না' ) selected @endif >না</option>
                    </select>
                      @error('tubewell')
                        {{ $message }}
                      @enderror
                    </span>
                   </div>
                   
                   
                     <div class="form-group">
                        <label for="sanitation">স্বাস্থসম্মত স্যানিটেশন </label> 
                        <select name="sanitation" id="status" class="form-control">
                          <option value="">----- স্বাস্থসম্মত স্যানিটেশন সিলেক্ট করুন -----</option>
                          
                          <option value="হ্যাঁ " @if ($peoples->sanitation == 'হ্যাঁ') selected @endif >হ্যাঁ </option>
                          <option value="না" @if ($peoples->sanitation == 'না') selected @endif >না</option>
                        
                        </select>
                          @error('sanitation')
                            {{ $message }}
                          @enderror
                        </span>
                       </div>
      
                    <div class="form-group">
                        <label for="hometype">বাড়ির ধরণ </label> 
                        <select name="hometype" id="status" class="form-control">
                          <option value="">----- বাড়ির ধরণ সিলেক্ট করুন -----</option>
                          <option value="কাঁচা" @if ($peoples->hometype == 'কাঁচা') selected @endif ></option>
                          <option value="সেমী পাকা" @if ($peoples->hometype == 'সেমী পাকা') selected @endif >সেমী পাকা</option>
                          <option value="আধা পাকা" @if ($peoples->hometype == 'আধা পাকা') selected @endif >আধা পাকা</option>n>
                          <option value="পাকা" @if ($peoples->hometype == 'পাকা') selected @endif >পাকা</option>
                        </select>
                          @error('hometype')
                            {{ $message }}
                          @enderror
                        </span>
                       </div>
                   
                     <div class="form-group">
                    <label for="occupation">পেশা  </label> 
                    <input type="text" name="occupation" id="occupation" placeholder="পেশা লিখুন ......" class="form-control" value="{{ $peoples->occupation}}">
                    <span class="text-danger">
                      @error('occupation')
                        {{ $message }}
                      @enderror
                    </span>
                   </div>
                   
                     <div class="form-group">
                    <label for="allowance">ভাতা</label> 
                    <input type="text" name="allowance" id="allowance" placeholder="ভাতা লিখুন ......" class="form-control" value="{{ $peoples->allowance}}">
                    <span class="text-danger">
                      @error('allowance')
                        {{ $message }}
                      @enderror
                    </span>
                   </div>
                   <!--  <div class="form-group">-->
                   <!--     <label for="yearly">বাৎসরিক মূল্যায়ন</label> -->
                   <!--     <input type="text" name="yearly" id="yearly" placeholder="বাৎসরিক মূল্যায়ন লিখুন ......" class="form-control" value="{{ $peoples->yearly}}">-->
                   <!--     <span class="text-danger">-->
                   <!--       @error('yearly')-->
                   <!--         {{ $message }}-->
                   <!--      @enderror-->
                   <!--     </span>-->
                   <!--</div>-->
                   
                     <div class="form-group">
                    <label for="tax">ইউপি কর্তৃক ট্যাক্স </label> 
                    <input type="text" name="tax" id="tax" placeholder="ইউপি কর্তৃক ট্যাক্স  লিখুন ......" class="form-control" value="{{ $peoples->tax}}">
                    <span class="text-danger">
                      @error('tax')
                        {{ $message }}
                      @enderror
                    </span>
                   </div>
                   
                     <div class="form-group">
                    <label for="due">বকেয়া</label> 
                    <input type="text" name="due" id="due" placeholder="বকেয়া লিখুন ......" class="form-control" value="{{ $peoples->due}}">
                    <span class="text-danger">
                      @error('due')
                        {{ $message }}
                      @enderror
                    </span>
                   </div>
                   


             <div class="form-group">
               <button class="form-control btn btn-info w-50" >আপডেট করুন</button>
               
             </div>
            

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection