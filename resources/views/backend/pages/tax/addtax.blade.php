
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>ট্যাক্স</h4>
      <p class="mg-b-0">ট্যাক্স সংগ্রহ করুন</p>
    </div>
</div>

      <div class="br-pagebody">
        
        <div class="row">
          <div class="col-sm-10 offset-md-1  p-3 border border-info">
              <h4 class="bg-info text-white w-100 p-2" atyle="text-align:center">কর দাতার তথ্য </h4>
              	 <style>
              	     .tabledata table td{
              	         cursor:pointer;
              	     }
              	     .tabledata{
              	         position:absolute;
              	         width:95%;
              	         background:red;
              	     }
              	     /*.tabledata .table{*/
              	     /*    position:absolute;*/
              	     /*}*/
              	 </style>
             <span class="text-danger">
                    @error('word')
                      {{ $message }}
                    @enderror
                  </span>
              	 <div class="form-group">
                  <label>ভোটার আইডি নং </label> 
                  <input type="text" class="search form-control" value="{{ old('name')}}">
                  <div class="bg-white rounded tabledata" style="z-index:9999;width: 97%">
                      <!--<table class="table">-->
                      <!--    <tr>-->
                      <!--        <td>id</td>-->
                      <!--        <td>Name</td>-->
                      <!--        <td>Asessment No</td>-->
                      <!--        <td>Holding No</td>-->
                      <!--        <td>Mobile</td>-->
                      <!--    </tr>-->
                      <!--</table>-->
                  </div>
                  <span class="text-danger">
                    @error('people_id')
                      {{ $message }}
                    @enderror
                  </span>
                 </div>
                
            </div>
            <div class="col-sm-5 bg-white p-3 offset-1 border border-info mt-3">
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="name">খানা প্রধানের নাম</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="name" id="name">
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="holdingNumber">হোল্ডিং নং</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="holdingNumber" id="holdingNumber">
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="pitarName">পিত নাম</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="pitarName" id="pitarName">
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="gram">এলাকা/গ্রাম</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="gram" id="gram">
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="wordNumber">ওয়ার্ড নম্বর</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="wordNumber" id="wordNumber">
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="mobile">মোবাইল নং</label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="mobile" id="mobile">
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="kor">কর টাকা </label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" readonly name="kor" id="kor">
                    </div>
                 </div>

            </div>
            <div class="col-sm-5 bg-white p-3 border border-info mt-3">
                <h5 class="p-2 text-danger mb-0">সর্বশেষ কর প্রদানের তারিখঃ 
                <span class="text-info">12-15-2023</span>
                </h5><hr>
                <div class="row text-center bg-info">
                        <p class="text-white w-100 p-2 m-0" atyle="text-align:center">সর্বমোট করে পরিমান  = 
                        <span class="text-bold">500</span>
                        </p>
                 </div>
                 <form action="{{ Route('tax.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                  <input type="hidden" name="sid" id="sid" class="form-control" value="">
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="artho_bosor">অর্থ বছর</label>
                    </div>
                    <div class="col-md-9">
                        <select name="artho_bosor" id="artho_bosor" class="form-control">
                          <option value="">----- অর্থ বছর  -----</option>
                          <option value="orthobosor1">2024-2025</option>
                          <option value="orthobosor2">2025-2026</option>
                          <option value="orthobosor3">2026-2027</option>
                          <option value="orthobosor4">2027-2028</option>
                          <option value="orthobosor5">2028-2029</option>
                        </select>
                        <span class="text-danger">
                        @error('artho_bosor')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="amount">পরিশোধিত টাকার পরিমান </label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" name="amount" id="amount">
                        <span class="text-danger">
                        @error('amount')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="paymentMethod">টাকা প্রদানের মাধ্যম </label>
                    </div>
                    <div class="col-md-9">     
                        <select name="paymentMethod" id="paymentMethod" class="form-control">
                          <option value="">----- --- -----</option>
                          <option value="ক্যাশ">ক্যাশ</option>
                          <option value="বিকাশ">বিকাশ</option>
                          <option value="নগদ">নগদ</option>
                          <option value="ব্যাংক">ব্যাংক</option>
                          <option value="উপায়">উপায়</option>
                          <option value="শিওরক্যাশ">শিওরক্যাশ</option>
                        </select>
                        <span class="text-danger">
                        @error('paymentMethod')
                          {{ $message }}
                        @enderror
                      </span>
                    </div>
                 </div>
                <div class="row my-2">
                    <div class="col-md-3 text-right pr-0" style="margin-top: 12px;">
                        <label for="note">মন্তব্য </label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" name="note" id="note">
                    </div>
                 </div>
                 
                <div class="row my-2">
                    <div class="col-md-9 offset-3 text-right pr-0" style="margin-top: 12px;">
                        <button class=" btn btn-info mr-3" > <i class="fas fa-print"></i> যোগ করুন</button>
                    </div>
                 </div>
                </form>
            </div>
          </div><!-- col-3 -->
        
      </div><!-- br-pagebody -->
@endsection