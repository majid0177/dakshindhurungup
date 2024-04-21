@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>ট্রেড লাইসেন্স </h4>
      <p class="mg-b-0">ট্রেড লাইসেন্সের  তথ্য  যোগ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
          <div class="bg-white rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 ">
                <form action="{{ Route('tradelicense.store') }}" method="POST">
                  @csrf
                <div class="row">
                  <div class="col-sm-6">
                      
                      <div class="form-group">
                      <label for="organization_name">প্রতিষ্ঠানের নাম </label> 
                      <input type="text" name="organization_name" id="organization_name" class="form-control" placeholder="প্রতিষ্ঠানের নাম লিখুন......">
                      <span class="text-danger">
                        @error('organization_name')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="address">প্রতিষ্ঠানের স্থান</label> 
                      <input type="text" name="address" id="address" placeholder="প্রতিষ্ঠানের স্থান লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('address')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="maliker_name">প্রোপাইটরের নাম</label> 
                      <input type="text" name="maliker_name" id="maliker_name" placeholder="প্রোপাইটরের নাম লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('maliker_name')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="father_name">পিতা / স্বামীর নাম</label> 
                      <input type="text" name="father_name" id="father_name" placeholder="পিতা / স্বামীর নাম লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('father_name')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="village">গ্রাম</label> 
                      <input type="text" name="village" id="village" placeholder="গ্রাম লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('village')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="postoffice">ডাকঘর </label> 
                      <input type="text" name="postoffice" id="postoffice" placeholder="ডাকঘরের নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('postoffice')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="thana">থানা / উপজেলা </label> 
                      <input type="text" name="thana" id="thana" placeholder="থানা / উপজেলার নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('thana')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="zela">জেলা </label> 
                      <input type="text" name="zela" id="zela" placeholder="জেলার নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('zela')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                    </div>
                    <div class="col-sm-6">

                      <div class="form-group">
                      <label for="present_business">বর্তমান ব্যবসা </label> 
                      <input type="text" name="present_business" id="present_business" placeholder="বর্তমান ব্যবসার  নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('present_business')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="license_fee">লাইসেন্স ফি</label> 
                      <input type="number" name="license_fee" id="license_fee" placeholder="লাইসেন্স ফি লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('license_fee')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="bokeya">বকেয়া ফি</label> 
                      <input type="number" name="bokeya" id="bokeya" placeholder="বকেয়া ফি লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('bokeya')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="jorimana">জরিমানা</label> 
                      <input type="number" name="jorimana" id="jorimana" placeholder="জরিমানা লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('jorimana')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="nobayon_fee">নবায়ন ফি</label> 
                      <input type="number" name="nobayon_fee" id="nobayon_fee" placeholder="নবায়ন ফি লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('nobayon_fee')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="vat">ভ্যাট %</label> 
                      <input type="number" name="vat" id="vat" placeholder="ভ্যাট লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('vat')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="total">মোট</label> 
                      <input type="number" name="total" id="total" placeholder="মোট লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('total')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="expire_date">লাইসেন্স মেয়াদ </label> 
                      <input type="date" name="expire_date" id="expire_date" placeholder="লাইসেন্স মেয়াদ  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('expire_date')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                       <button class="form-control btn btn-info w-100 mb-4" >যোগ করুন</button>
                     
                    
        
                    </div>
                  </div><!-- col-3 -->
                </form>
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection