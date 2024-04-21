@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>ওয়ারেশনামা </h4>
      <p class="mg-b-0">ওয়ারেশনামার তথ্য  যোগ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
          <div class="bg-white rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 ">
                <form action="{{ Route('wareshinfo.store') }}" method="POST">
                  @csrf
                <div class="row">
                  <div class="col-sm-6">
                      
                      <div class="form-group">
                      <label for="union">ইউনিয়ন </label> 
                      <input type="text" name="union" id="union" placeholder="ইউনিয়নের নাম  লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('union')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                    
                  	 <div class="form-group">
                      <label for="word_no">ওয়ার্ড নম্বর</label>
                      <select name="word_no" id="word_no" class="form-control">
                              <option value="১">----- ওয়ার্ড নম্বর সিলেক্ট করুন -----</option>
                              <option value="১">১</option>
                              <option value="২">২</option>
                              <option value="৩">৩</option>
                              <option value="৪">৪</option>
                              <option value="৫">৫</option>
                              <option value="৬">৬</option>
                              <option value="৭">৭</option>
                              <option value="৮">৮</option>
                              <option value="৯">৯</option>
                     </select>
                      <span class="text-danger">
                        @error('word_no')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>  
                    
                  	 <div class="form-group">
                      <label for="village">এলাকা/গ্রাম</label> 
                      <input type="text" name="village" id="village" placeholder="এলাকা/গ্রাম লিখুন......" class="form-control" >
                      <span class="text-danger">
                        @error('village')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                     
                  	 <div class="form-group">
                      <label for="name">বাড়ির মালিকের নাম </label> 
                      <input type="text" name="name" id="name" placeholder="বাড়ির মালিকের নাম  লিখুন ......" class="form-control" value=""{{old('name')}}>
                      <span class="text-danger">
                        @error('name')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                     
                     <div class="form-group">
                      <label for="deadbody_name">মৃত ব্যাক্তির নাম </label> 
                      <div class="mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                                স্বামী   &nbsp;
                              <input value="স্বামী " multiple name="deadbody_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <div class="input-group-text">
                                পুত্র   &nbsp;
                              <input value="পুত্র" multiple name="deadbody_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <div class="input-group-text">
                                কন্যা   &nbsp;
                              <input value="কন্যা " multiple name="deadbody_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <div class="input-group-text">
                                স্ত্রী   &nbsp;
                              <input value="স্ত্রী" multiple name="deadbody_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" name="deadbody_name" class="form-control" placeholder="মৃত ব্যাক্তির নাম    লিখুন ..." aria-label="Text input with checkbox">
                            
                          </div>
                          <span class="text-danger">
                                @error('deadbody_name')
                                  {{ $message }}
                                @enderror
                            </span>
                       </div>
                     </div>
                     
                     <div class="form-group">
                      <label for="son">পুত্রের সংখ্যা </label> 
                      <input type="text" name="son" id="son" placeholder="পুত্রের সংখ্যা  লিখুন ......" class="form-control" value="{{old('son')}}">
                      <span class="text-danger">
                        @error('son')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                     
                </div>
                    <div class="col-sm-6">
                           
                     <div class="form-group">
                         
                     
                    <div class="form-group">
                        
                      <label for="daughter">কন্যার সংখ্যা </label> 
                      <input type="text" name="daughter" id="daughter" placeholder="কন্যার সংখ্যা  লিখুন ......" class="form-control" value="{{old('daughter')}}">
                      <span class="text-danger">
                        @error('daughter')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                     
                     <div class="form-group">
                      <label for="deadbody_name">স্ত্রী/স্বামী/পিতা/মাতার সংখ্যা</label> 
                      <div class="mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                                স্ত্রী   &nbsp;
                              <input value="স্ত্রী" multiple name="guardian_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <div class="input-group-text">
                                স্বামী   &nbsp;
                              <input value="স্বামী " multiple name="guardian_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <div class="input-group-text">
                                পিতা   &nbsp;
                              <input value="পিতা " multiple name="guardian_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <div class="input-group-text">
                                মাতা   &nbsp;
                              <input value="মাতা " multiple name="guardian_value[]" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" name="guardian" class="form-control" placeholder="এখানে  সংখ্যা  লিখুন ......" aria-label="Text input with checkbox" value="{{ old('guardian_name') }}">
                            
                          </div>
                          <span class="text-danger">
                                @error('guardian')
                                  {{ $message }}
                                @enderror
                            </span>
                       </div>
                     </div>
                     
                     
                     
                     <div class="form-group">
                          <label for="deadbody_name">ভ্রাতা/বোন/ভাইপো/ভাইজী/পোতা/পুতনী/নাতি/নাতনীর সংখ্যা  </label> 
                          <div class="mb-3">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    ভ্রাতা   &nbsp;
                                  <input value=" ভ্রাতা" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <div class="input-group-text">
                                    বোন   &nbsp;
                                  <input value="বোন" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <div class="input-group-text">
                                    ভাইপো   &nbsp;
                                  <input value="ভাইপো" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <div class="input-group-text">
                                    ভাইজী   &nbsp;
                                  <input value="ভাইজী" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <div class="input-group-text">
                                    পোতা   &nbsp;
                                  <input value="পোতা" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <div class="input-group-text">
                                    পুতনী   &nbsp;
                                  <input value="পুতনী" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                              </div>
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    নাতি   &nbsp;
                                  <input value="নাতি" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <div class="input-group-text">
                                    নাতনী   &nbsp;
                                  <input value="নাতনী" multiple name="brother_value[]" type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                                <input type="text" name="brother" id="brother" placeholder="এখানে সংখ্যা  লিখুন......" class="form-control" >
                        		    
                              </div>
                              <span class="text-danger">
                		      @error('brother')
                		        {{ $message }}
                		      @enderror
                		    </span>
                           </div>
                         </div>
                     
                     <div class="form-group">
                      <label for="total">মোট সদস্য</label> 
                      <input type="text" name="total" id="total" placeholder="মোট সদস্য সংখ্যা  লিখুন ......" class="form-control" value="{{old('total')}}">
                      <span class="text-danger">
                        @error('total')
                          {{ $message }}
                        @enderror
                      </span>
                     </div>
                     
                       <button class="form-control btn btn-info w-100" >যোগ করুন</button>
                       
                     </div>
                    
        
                    </div>
                  </div><!-- col-3 -->
                </form>
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection