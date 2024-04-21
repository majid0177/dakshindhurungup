
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>এলাকাবাসী</h4>
      <p class="mg-b-0">এলাকাবাসীর তালিকা লিপিবদ্ধ পরিচালনা করুন</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
          	 <table class="table" border="1">
              <thead>
                <tr>
                  <!--<th>অ্যাসেসমেন্ট নং</th>-->
                  <th>এলাকা/গ্রাম</th>
                  <th>ওয়ার্ড নম্বর</th>
                  <th>উপজেলা</th>
                  <th>জেলা</th>
                  
                </tr>
              </thead> 
              <tbody>
                  <tr>
                    <!--<td>{{ $peoples->acessment }}</td>-->
                    <td>{{ $peoples->gram }}</td>
                    <td>{{ $peoples->word }}</td>
                    <td>{{ $peoples->thana }}</td>
                    <td>{{ $peoples->zela }}</td>
                  </tr>
              </tbody>
             </table>
          	 <div class="row">
          	     <div class="col-md-4 offset-md-2">
          	         <table class="table" border="1">
                      <thead>
                        <tr>
                            <th>হোল্ডিং নং</th><td>{{ $peoples->holding_number }}</td>
                        </tr>
                        <tr>
                            <th>বাড়ির মালিকের নাম</th><td>{{ $peoples->khana_prodhaner_name }}</td>
                        </tr>
                        <tr>
                          <th>পিত নাম</th><td>{{ $peoples->pitar_nam }}</td>
                        </tr>
                        <tr>
                          <th>জাতীয় পরিচয় পত্রের নং </th><td>{{ $peoples->nid }}</td>
                        </tr>
                        <tr>
                          <!--<th>মোবাইল নং </th><td>{{ $peoples->mobile }}</td>-->
                        </tr>
                        <tr>
                          <th>পরিবারের সদস্য সংখ্যা</th><td>{{ $peoples->khanar_sodosso }}</td>
                        </tr>
                      </thead> 
                     </table>
          	     </div>
                   <div class="col-md-4">
                    <table class="table" border="1">
                   <thead>
                     <tr>
                       <th>বাড়ির ধরণ</th><td>{{ $peoples->barir_dhoron }}</td>
                     </tr>
                     <tr>
                       <th>পেশা </th><td>{{ $peoples->pesha }}</td>
                     </tr>
                     <tr>
                       <th>ভাতা  </th><td></td>
                     </tr>
                     <tr>
                       <!--<th>মূল্যায়ন  </th><td>{{ $peoples->remark }}</td>-->
                     </tr>
                     <tr>
                       <th>ইউপি কর্তৃক ট্যাক্স  </th><td>{{ $peoples->apnar_tax }}</td>
                     </tr>
                     <tr>
                       <th>মন্তব্য </th><td>নাই  </td>
                     </tr> 
                   </thead> 
                  </table>
                </div>
          	 </div>
          	 <div class="row">
          	     <div class="col-md-8 offset-md-2">
          	         <table class="table" border="1">
                      <thead>
                        <tr>
                            <th colspan="6" class="text-center" style="border-bottom: 1px solid black !important">ট্যাক্স আদায়ের অর্থ বৎসর </th>
                        </tr>
                        
                        <tr>
                            <th>২০২১-২২ অর্থ বৎসর </th>
                            <th>২০২২-২৩ অর্থ বৎসর </th>
                            <th>২০২৩-২৪ অর্থ বৎসর</th>
                            <th>২০২৪-২৫ অর্থ বৎসর</th>
                            <th>২০২৫-২৬ অর্থ বৎসর  </th>
                            <th>২০২৬-২৭ অর্থ বৎসর </th>
                        </tr>
                        <tr>
                           <td>{{ $peoples->kor->amount1 ?? '0' }}</td>
                           
                           <td>{{ $peoples->kor->amount2 ?? '0'}}</td>
                           
                           <td>{{ $peoples->kor->amount3 ?? '0'}}</td>
                           
                           <td>{{ $peoples->kor->amount4 ?? '0'}}</td>
                           
                           <td>{{ $peoples->kor->amount5 ?? '0'}}</td>
                           
                           
                        </tr>
                      </thead> 
                     </table>
          	     </div>
          	 </div>
             <button class="btn btn-info"><i class="fas fa-print"></i> Print Page</button>
             <a href="{{ url('/admin/peoples/manage') }}" class="btn btn-warning"><i class="fas fa-backward"></i> Back</a>
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection