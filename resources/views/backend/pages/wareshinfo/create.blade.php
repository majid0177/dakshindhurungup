@extends('backend.master_template.template')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>ওয়ারেশনামা </h4>
            <p class="mg-b-0">ওয়ারেশনামার তথ্য যোগ করুন </p>
        </div>
    </div>

    <div class="br-pagebody">
        <div class="bg-white rounded overflow-hidden">

            <div class="pd-x-20 pd-t-20 ">
                <div>
                    <h4>আবেদনকারীর তথ্য</h4>
                </div>
                <form action="{{ Route('wareshinfo.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="union">আবেদনকারীর নাম</label>
                                <input type="text" name="ap_name" id="ap_name"
                                    placeholder="আবেদনকারীর নাম  লিখুন......" class="form-control">
                                <span class="text-danger">
                                    @error('ap_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">জাতীয় পরিচয় পত্র</label>
                                <input type="number" name="nid" id="nid"
                                    placeholder="জাতীয় পরিচয় পত্রের নাম্বারটি লিখুন......" class="form-control">
                                <span class="text-danger">
                                    @error('nid')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">জম্ম নিবন্ধন নাম্বার</label>
                                <input type="number" name="birth_id" id="birth_id"
                                    placeholder="জম্ম নিবন্ধন নাম্বার লিখুন......" class="form-control">
                                <span class="text-danger">
                                    @error('birth_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">পিতার নাম</label>
                                <input type="text" name="father" id="father" placeholder="পিতার নাম  লিখুন......"
                                    class="form-control">
                                <span class="text-danger">
                                    @error('father')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">স্বামীর/স্ত্রীর নাম</label>
                                <input type="text" name="husband" id="husband"
                                    placeholder="স্বামীর/স্ত্রীর নাম  লিখুন......" class="form-control">
                                <span class="text-danger">
                                    @error('husband')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">মাতার নাম</label>
                                <input type="text" name="mother" id="mother" placeholder="মাতার নাম  লিখুন......"
                                    class="form-control">
                                <span class="text-danger">
                                    @error('mother')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">জম্ম তারিখ</label>
                                <input type="date" name="dob" id="dob" placeholder="জম্ম তারিখ লিখুন......"
                                    class="form-control">
                                <span class="text-danger">
                                    @error('mother')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="word_no">বৈবাহিক অবস্থা</label>
                                <select name="marital_status" id="marital_status" class="form-control">
                                    <option value="married">বিবাহিত</option>
                                    <option value="unmarried">অবিবাহিত</option>
                                </select>
                                <span class="text-danger">
                                    @error('marital_status')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="union">মোবাইল নম্বর</label>
                                <input type="number" name="mobile" id="mobile" placeholder="মোবাইল নম্বর লিখুন......"
                                    class="form-control">
                                <span class="text-danger">
                                    @error('mobile')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="holding">হোল্ডিং নং</label>
                                <input type="number" name="holding" id="holding" placeholder="হোল্ডিং নং লিখুন......"
                                    class="form-control">
                                <span class="text-danger">
                                    @error('holding')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="ward">ওয়ার্ড নম্বর</label>
                                <select name="ward" id="ward" class="form-control">
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
                                    @error('ward')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="post_office">ডাকঘর</label>
                                <input type="text" name="post_office" id="post_office"
                                    placeholder="ডাকঘর লিখুন......" class="form-control">
                                <span class="text-danger">
                                    @error('post_office')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="village">এলাকা/গ্রাম</label>
                                <input type="text" name="village" id="village"
                                    placeholder="এলাকা/গ্রাম লিখুন......" class="form-control">
                                <span class="text-danger">
                                    @error('village')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            {{-- <div class="form-group">
                                <label for="name">বাড়ির মালিকের নাম </label>
                                <input type="text" name="name" id="name"
                                    placeholder="বাড়ির মালিকের নাম  লিখুন ......" class="form-control"
                                    value=""{{ old('name') }}>
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
                                            স্বামী &nbsp;
                                            <input value="স্বামী " multiple name="deadbody_value[]" type="checkbox"
                                                aria-label="Checkbox for following text input">
                                        </div>
                                        <div class="input-group-text">
                                            পুত্র &nbsp;
                                            <input value="পুত্র" multiple name="deadbody_value[]" type="checkbox"
                                                aria-label="Checkbox for following text input">
                                        </div>
                                        <div class="input-group-text">
                                            কন্যা &nbsp;
                                            <input value="কন্যা " multiple name="deadbody_value[]" type="checkbox"
                                                aria-label="Checkbox for following text input">
                                        </div>
                                        <div class="input-group-text">
                                            স্ত্রী &nbsp;
                                            <input value="স্ত্রী" multiple name="deadbody_value[]" type="checkbox"
                                                aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" name="deadbody_name" class="form-control"
                                            placeholder="মৃত ব্যাক্তির নাম    লিখুন ..."
                                            aria-label="Text input with checkbox">

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
                                <input type="text" name="son" id="son"
                                    placeholder="পুত্রের সংখ্যা  লিখুন ......" class="form-control"
                                    value="{{ old('son') }}">
                                <span class="text-danger">
                                    @error('son')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div> --}}

                        </div>
                        <div class="col-sm-6">
                            <h5>মৃত ব্যক্তির তথ্য</h5>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="daughter">নাম</label>
                                    <input type="text" name="wr_name" id="wr_name" placeholder="নাম লিখুন ......"
                                        class="form-control" value="{{ old('wr_name') }}">
                                    <span class="text-danger">
                                        @error('wr_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="son">জাতীয় পরিচয় পত্র</label>
                                    <input type="number" name="wr_nid" id="wr_nid"
                                        placeholder="জাতীয় পরিচয় পত্র ......" class="form-control"
                                        value="{{ old('wr_nid') }}">
                                    <span class="text-danger">
                                        @error('wr_nid')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="daughter">পিতার নাম</label>
                                    <input type="text" name="wr_father" id="wr_father" placeholder="নাম লিখুন ......"
                                        class="form-control" value="{{ old('wr_father') }}">
                                    <span class="text-danger">
                                        @error('wr_father')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="daughter">স্বামীর নাম</label>
                                    <input type="text" name="wr_husband" id="wr_husband"
                                        placeholder="নাম লিখুন ......" class="form-control"
                                        value="{{ old('wr_husband') }}">
                                    <span class="text-danger">
                                        @error('wr_husband')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="daughter">মাতার নাম</label>
                                    <input type="text" name="wr_mother" id="wr_mother" placeholder="নাম লিখুন ......"
                                        class="form-control" value="{{ old('wr_mother') }}">
                                    <span class="text-danger">
                                        @error('wr_mother')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="ward">ওয়ার্ড নম্বর</label>
                                    <select name="wr_word" id="wr_word" class="form-control">
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
                                        @error('wr_word')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="village">এলাকা/গ্রাম</label>
                                    <input type="text" name="village" id="village"
                                        placeholder="এলাকা/গ্রাম লিখুন......" class="form-control">
                                    <span class="text-danger">
                                        @error('village')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="details">বিস্তারিত</label>
                                    <input type="text" name="details" id="details" placeholder=""
                                        class="form-control">
                                    <span class="text-danger">
                                        @error('details')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                {{-- <div class="form-group">
                                    <label for="deadbody_name">স্ত্রী/স্বামী/পিতা/মাতার সংখ্যা</label>
                                    <div class="mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                স্ত্রী &nbsp;
                                                <input value="স্ত্রী" multiple name="guardian_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                স্বামী &nbsp;
                                                <input value="স্বামী " multiple name="guardian_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                পিতা &nbsp;
                                                <input value="পিতা " multiple name="guardian_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                মাতা &nbsp;
                                                <input value="মাতা " multiple name="guardian_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <input type="text" name="guardian" class="form-control"
                                                placeholder="এখানে  সংখ্যা  লিখুন ......"
                                                aria-label="Text input with checkbox" value="{{ old('guardian_name') }}">

                                        </div>
                                        <span class="text-danger">
                                            @error('guardian')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="deadbody_name">ভ্রাতা/বোন/ভাইপো/ভাইজী/পোতা/পুতনী/নাতি/নাতনীর সংখ্যা
                                    </label>
                                    <div class="mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                ভ্রাতা &nbsp;
                                                <input value=" ভ্রাতা" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                বোন &nbsp;
                                                <input value="বোন" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                ভাইপো &nbsp;
                                                <input value="ভাইপো" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                ভাইজী &nbsp;
                                                <input value="ভাইজী" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                পোতা &nbsp;
                                                <input value="পোতা" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                পুতনী &nbsp;
                                                <input value="পুতনী" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                নাতি &nbsp;
                                                <input value="নাতি" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <div class="input-group-text">
                                                নাতনী &nbsp;
                                                <input value="নাতনী" multiple name="brother_value[]" type="checkbox"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <input type="text" name="brother" id="brother"
                                                placeholder="এখানে সংখ্যা  লিখুন......" class="form-control">

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
                                    <input type="text" name="total" id="total"
                                        placeholder="মোট সদস্য সংখ্যা  লিখুন ......" class="form-control"
                                        value="{{ old('total') }}">
                                    <span class="text-danger">
                                        @error('total')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div> --}}

                            </div>
                        </div>
                       
                    </div><!-- col-3 -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="ttle2"> ওয়ারিশগনের তথ্য দিন </h4>
                                <div class="form-group row">
                                    <div class="col-md-12" style="overflow-x:auto;">
                                        <table data-dynamicrows class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="10%">ক্রমিক নং</th>
                                                    <th>নাম</th>
                                                    <th>সম্পর্ক</th>
                                                    <th>জম্ম তারিখ</th>
                                                    <th>জাতীয় পরিচয়পত্র/জন্মনিবন্ধন নং</th>
                                                    <th>মন্তব্য</th>
                                                    <th>যোগ করুন</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <input type="hidden" name="warish_id[]" class="form-control">
                                                    <td><input type="number" name="b_slno[]" class="form-control"></td>
                                                    <td><input type="text" name="b_name[]" class="form-control"></td>
                                                    <td><input type="text" name="b_relation[]" class="form-control">
                                                    </td>
                                                    <td><input type="date" name="b_date[]" class="form-control"></td>
                                                    <td><input type="number" name="b_nid[]" class="form-control"></td>
                                                    <td><input type="text" name="b_comments[]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-minus" data-remove></i>
                                                        <!--<i class="fa fa-arrows" data-move></i>-->
                                                        <i class="fa fa-plus" data-add></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="form-control btn btn-info w-25 mx-auto my-5">যোগ করুন</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div><!-- br-pagebody -->
@endsection
