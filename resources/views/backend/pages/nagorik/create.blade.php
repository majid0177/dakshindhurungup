@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>নাগরিক</h4>
      <p class="mg-b-0">নাগরিকের  তথ্য  যোগ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
          <div class="bg-white rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 ">
                <form action="{{ Route('nagorik.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="row">
                  <div class="col-sm-6">
                      
                      <div class="form-group">
                      <label for="date">তারিখ </label> 
                      <input type="date" name="date" id="date" class="form-control">
                      <span class="text-danger">
                        @error('date')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="name">নাগরিকের নাম </label> 
                      <input type="text" name="name" id="name" placeholder="নাগরিকের নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('name')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="father_name">পিতা / স্বামীর নাম </label> 
                      <input type="text" name="father_name" id="father_name" placeholder="পিতা / স্বামীর নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('father_name')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                     <div class="form-group">
                      <label for="mother_name">মাতার নাম</label> 
                      <input type="text" name="mother_name" id="mother_name" placeholder="মাতার নাম লিখুন ......" class="form-control" >
                      <span class="text-danger">
                        @error('mother_name')
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
                      <label for="nagorikotto_union">ইউনিয়ন </label> 
                      <input type="text" name="nagorikotto_union" id="nagorikotto_union" placeholder="ইউনিয়নের  নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('nagorikotto_union')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="word_no">ওয়ার্ড নম্বর </label> 
                      <input type="text" name="word_no" id="word_no" placeholder="ওয়ার্ড নম্বর  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('word_no')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="voterId_no">ভোটার আইডি নং </label> 
                      <input type="text" name="voterId_no" id="voterId_no" placeholder="ভোটার আইডি নং লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('voterId_no')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="dob_no">জন্ম নিবন্ধন নং </label> 
                      <input type="text" name="dob_no" id="dob_no" placeholder="জন্ম নিবন্ধন নং  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('dob_no')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="phone_no">মোবাইল নং </label> 
                      <input type="text" name="phone_no" id="phone_no" placeholder="মোবাইল নং  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('phone_no')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="picture">নাগরিকের ছবি </label> 
                      <input type="file" name="picture" id="picture" class="form-control" >
                      <span class="text-danger">
                        @error('picture')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>

                      <div class="form-group">
                      <label for="dob">জন্ম তারিখ </label> 
                      <input type="date" name="dob" id="dob" class="form-control" >
                      <span class="text-danger">
                        @error('dob')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                     
                       <button class="form-control btn btn-info w-100" >যোগ করুন</button>
                       
                     </div>
                    
        
                    </div>
                  
                </form>
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection