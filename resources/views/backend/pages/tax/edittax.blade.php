
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>কর্মকর্তা কর্মচারী </h4>
      <p class="mg-b-0">কর্মকর্তা কর্মচারীর তালিকা লিপিবদ্ধ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('staff.update',$staffs->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          	 <div class="form-group">
              <label for="name">নাম</label> 
              <input type="text" name="name" id="name" placeholder="এখানে  নাম লিখুন......" class="form-control" value="{{$staffs->name }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             
          	 <div class="form-group">
              <label for="nid">জাতীয় পরিচয় পত্রের নম্বর</label> 
              <input type="text" name="nid" id="nid" placeholder="জাতীয় পরিচয় পত্রের নম্বর লিখুন ......" class="form-control" value="{{$staffs->nid }}">
              <span class="text-danger">
                @error('nid')
                  {{ $message }}
                @enderror
              </span>
             </div>

             
          	 <div class="form-group">
              <label for="surename">পদবী</label> 
              <select name="surname" id="status" class="form-control">
                <option value="">----- পদবী সিলেক্ট করুন -----</option>
                
                <option value="চেয়ারম্যান" @if ( $staffs->surname == 'চেয়ারম্যান' ) selected @endif>চেয়ারম্যান</option>
                
                <option value="সচিব" @if ($staffs->surname == 'সচিব' ) selected @endif>সচিব</option>
                
                <option value="সদস্য" @if ($staffs->surname == 'সদস্য' ) selected @endif>সদস্য</option>
                
                <option value="মহিলা সদস্য" @if ($staffs->surname == 'মহিলা সদস্য' ) selected @endif>মহিলা সদস্য</option
                >
                <option value="দফাদার"   @if ($staffs->surname == 'দফাদার' ) selected @endif >দফাদার</option>
                
                <option value="গ্রাম পালিশ"  >গ্রাম পালিশ</option>
                
                <option value="অন্যান্য"  @if ($staffs->surname == '' ) selected @endif  >অন্যান্য</option>
              </select>
                @error('surename')
                  {{ $message }}
                @enderror
              </span>
             </div>


             <div class="form-group">
               <label for="gram_word">গ্রাম ও ওয়ার্ড নম্বর</label>
               <textarea name="gram_word" id="gram_word" placeholder="গ্রাম ও ওয়ার্ড নম্বর লিখুন......" class="form-control">{{ $staffs->gram_word }}</textarea>

              <span class="text-danger">
                @error('gram_word')
                  {{ $message }}
                @enderror
              </span>
             </div>

            </div>
            <div class="col-sm-6">

            <div class="form-group">
              <label for="mobile">মোবাইল নম্বর</label> 
              <input type="text" name="mobile" id="mobile" placeholder="মোবাইল নম্বর লিখুন ......" class="form-control" value="{{ $staffs->mobile }}">
              <span class="text-danger">
                @error('mobile')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
             <div class="form-group">
                 <img height="200" src="{{ asset('backend/staff/'.$staffs->pic) }}"/><br/>
              <label class="mt-3" for="pic">ছবি আপলোড করুন</label> 
              <input type="file" name="pic" class="form-control">
              <span class="text-danger">
              </span>
             </div>

             <div class="form-group">
              <label for="status">অবস্থা</label>
              <select name="status" id="status" class="form-control">
                <option value="1">-----অবস্থা সিলেক্ট করুন-----</option>
                <option value="1" @if($staffs->status == 1 ) selected @endif) >সক্রিয়</option>
                <option value="2" @if($staffs->status == 2 ) selected @endif) >নিষ্ক্রিয়</option>
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >যোগ করুন</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection