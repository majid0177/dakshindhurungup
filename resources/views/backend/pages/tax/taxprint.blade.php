<!DOCTYPE html>
<html lang="en">
<head>
  <title>২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://dakshindhurungup.com/new_frontend/aup/assets/img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <style>
          .info{
              line-height:15px;
              font-size:16px;
          }
          .table{
              font-size: 11px !important;
          }
          .table tr th{
              background:transparent !important;
              border:1px solid black;
              padding: 4px 5px;
          }
          
          @media print{
             .pp{
                 display:none;
             }
          }
      </style>
</head>
<body style="font-size:12px">
    <div class="pp" style="position:absolute;top:15px;left:20px">
        <a href="{{ route('tax.create') }}" class="btn btn-warning">Back</a>
        <button class="btn btn-info" onclick="print()">Print</button>
    </div>
<div class="mx-4">
  <div class="row d-flex py-2" style="background:#fffde7; border: 3px solid green">
    <div class="col-8 ps-0 text-center">
      <h3>২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</h3>
      <h5>কুতুবদিয়া, কক্সবাজার</h5>
      <p class="mb-1">বসত-বাড়ির কর বিল পেপার </p>
     </div>
    <div class="col-4 ps-0">
       <div class="d-flex justify-content-between">
           <div>
                <h6 style="font-size:13px">অর্থ বছর :@if($orthoBosor == 'orthobosor1')
                    ২০২৪-২০২৫
                    @elseif($orthoBosor == 'orthobosor2')
                    ২০২৫-২০২৬
                    @elseif($orthoBosor == 'orthobosor3')
                    ২০২৬-২০২৭
                    @elseif($orthoBosor == 'orthobosor4')
                    ২০২৭-২০২৮
                    @elseif($orthoBosor == 'orthobosor5')
                    ২০২৮-২০২৯
                    @endif ইং  </h6>
           </div>
           <div>
               <p style="color:blue;font-size:12px">অফিস কপি </p>
           </div>
       </div>
        <p >বিল পরিশোধের তাং: ১৫ নভেম্বর ২০২৪ ইং </p>
     </div>
      <hr class="my-1">
    <div class="col-8 ps-0 text-start ps-5 info">
     <p>নামঃ {{ $taxs->sodosso->khana_prodhaner_name ?? '' }} </p>
    <p>পিতাঃ {{ $taxs->sodosso->pitar_nam ?? '' }} </p>
    <p>গ্রামঃ {{ $taxs->sodosso->gram ?? '' }}, ডাকঘরঃ {{ $taxs->sodosso->dakghor ?? '' }}</p> 
     <p>উপজেলাঃ {{ $taxs->sodosso->thana ?? '' }}, জেলাঃ   {{ $taxs->sodosso->zela ?? '' }} </p>
  
         <table border="1" class="table" style="">
                <tr>
                    <th>হোল্ডিং নম্বর </th>
                    <th>{{ $taxs->sodosso->holding_number ?? '' }}</th>
                </tr>
                <tr>
                    <th>ভোটার আইডি </th>
                    <th>{{ $taxs->sodosso->nid ?? '' }}</th>
                </tr>
                <tr>
                    <th>মোবাইল নম্বর </th>
                    <th>{{ $taxs->sodosso->mobile ?? '' }}</th>
                </tr>
            </table>
            <div class="d-flex justify-content-between">
                <div style="margin-top:60px">আদায়কারীর স্বাক্ষর </div>
                <div class="text-center">
                    <img height="60" src="{{ asset('new_frontend/signatur.png') }}">
                    <p>চেয়ারম্যানের- স্বাক্ষর ও সীল</p>
                </div>
            </div>
     </div>
     <div class="col-4 ps-0">
          <h5  style="font-size:15px;font-weight:bold">ঘর প্রতি নির্ধারিত কর </h5> 
          <table border="1" class="table">
            <tr>
                <th>পাকা </th>
                <th>১২০ টাকা</th>
            </tr>
            <tr>
                <th>আধাপাকা</th>
                <th>১০০ টাকা</th>
            </tr>
            <tr>
                <th>কাঁচা</th>
                <th>৭০ টাকা</th>
            </tr>
        </table>
         <h5  style="font-size:15px;font-weight:bold">চলমান অর্থ বছর </h5> 
          <table border="1" class="table">
            <tr>
                <th>বাড়ির ধরন </th>
                <th>{{ $taxs->sodosso->barir_dhoron}}</th>
            </tr>
            <tr>
                <th>রুম  সংখ্যা</th>
                <th>{{ $taxs->sodosso->paka ?? $taxs->sodosso->adha_paka ?? $taxs->sodosso->kacha ?? '0' }}</th>
            </tr>
            <tr>
                <th>নির্ধারিত কর</th>
                <th>{{ $taxs->sodosso->apnar_tax}}টাকা</th>
            </tr>
            <tr>
                <th>পরিশোধিত কর </th>
                <th>
                    @if($orthoBosor == 'orthobosor1')
                    {{ $taxs->amount1 }}
                    @elseif($orthoBosor == 'orthobosor2')
                    {{ $taxs->amount2 }}
                    @elseif($orthoBosor == 'orthobosor3')
                    {{ $taxs->amount3 }}
                    @elseif($orthoBosor == 'orthobosor4')
                    {{ $taxs->amount4 }}
                    @elseif($orthoBosor == 'orthobosor5')
                    {{ $taxs->amount5 }}
                    @endif
                     টাকা</th>
            </tr>
            <tr>
                <th>বকেয়া (যদি থাকে ) </th>
                <th>০.০০ টাকা</th>
            </tr>
        </table>
      </div>
      <hr>
      <div class="text-center col-12" style="color:blue">
          <h4 style="font-size:18px">নিয়মিত কর পরিষদ করুন। </h4>
          <p class="mb-0">আপনার কর যাচাই করতে ভিজিট করুন : www.dakshindhurungup.com</p>
      </div>
  </div>
</div>
<div class="mx-4 mt-4">
  <div class="row d-flex py-2" style="background:#fffde7; border: 3px solid green">
    <div class="col-8 ps-0 text-center">
      <h3>২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</h3>
      <h5>কুতুবদিয়া, কক্সবাজার</h5>
      <p class="mb-1">বসত-বাড়ির কর বিল পেপার </p>
     </div>
    <div class="col-4 ps-0">
       <div class="d-flex justify-content-between">
           <div>
                <h6 style="font-size:14px">অর্থ বছর :@if($orthoBosor == 'orthobosor1')
                    ২০২৪-২০২৫
                    @elseif($orthoBosor == 'orthobosor2')
                    ২০২৫-২০২৬
                    @elseif($orthoBosor == 'orthobosor3')
                    ২০২৬-২০২৭
                    @elseif($orthoBosor == 'orthobosor4')
                    ২০২৭-২০২৮
                    @elseif($orthoBosor == 'orthobosor5')
                    ২০২৮-২০২৯
                    @endif ইং  </h6>
           </div>
           <div>
               <p style="color:blue">গ্রাহক কপি </p>
           </div>
       </div>
        <p >বিল পরিশোধের তাং: ১৫ নভেম্বর ২০২৪ ইং </p>
     </div>
      <hr class="my-1">
    <div class="col-8 ps-0 text-start ps-5 info">
     <p>নামঃ {{ $taxs->sodosso->khana_prodhaner_name ?? '' }} </p>
    <p>পিতাঃ{{ $taxs->sodosso->pitar_nam ?? '' }} </p>
    <p>গ্রামঃ{{ $taxs->sodosso->gram ?? '' }}, ডাকঘরঃ {{ $taxs->sodosso->dakghor ?? '' }}</p> 
     <p>উপজেলাঃ {{ $taxs->sodosso->thana ?? '' }}, জেলাঃ   {{ $taxs->sodosso->zela ?? '' }} </p>
  
         <table border="1" class="table" style="">
                <tr>
                    <th>হোল্ডিং নম্বর </th>
                    <th>{{ $taxs->sodosso->holding_number ?? '' }}</th>
                </tr>
                <tr>
                    <th>ভোটার আইডি </th>
                    <th>{{ $taxs->sodosso->nid ?? '' }}</th>
                </tr>
                <tr>
                    <th>মোবাইল নম্বর </th>
                    <th>{{ $taxs->sodosso->mobile ?? '' }}</th>
                </tr>
            </table>
            <div class="d-flex justify-content-between">
                <div style="margin-top:60px">আদায়কারীর স্বাক্ষর </div>
                <div class="text-center">
                    <img height="60" src="{{ asset('new_frontend/signatur.png') }}">
                    <p>চেয়ারম্যানের- স্বাক্ষর ও সীল</p>
                </div>
            </div>
     </div>
     <div class="col-4 ps-0">
          <h5  style="font-size:15px;font-weight:bold">ঘর প্রতি নির্ধারিত কর </h5> 
          <table border="1" class="table">
            <tr>
                <th>পাকা </th>
                <th>১২০ টাকা</th>
            </tr>
            <tr>
                <th>আধাপাকা</th>
                <th>১০০ টাকা</th>
            </tr>
            <tr>
                <th>কাঁচা</th>
                <th>৭০ টাকা</th>
            </tr>
        </table>
         <h5  style="font-size:15px;font-weight:bold">চলমান অর্থ বছর </h5> 
          <table border="1" class="table">
            <tr>
                <th>বাড়ির ধরন </th>
                <th>{{ $taxs->sodosso->barir_dhoron}}</th>
            </tr>
            <tr>
                <th>রুম  সংখ্যা</th>
                <th>{{ $taxs->sodosso->paka ?? $taxs->sodosso->adha_paka ?? $taxs->sodosso->kacha ?? '0' }}</th>
            </tr>
            <tr>
                <th>নির্ধারিত কর</th>
                <th>{{ $taxs->sodosso->apnar_tax}}টাকা</th>
            </tr>
            <tr>
                <th>পরিশোধিত কর </th>
                <th>
                    @if($orthoBosor == 'orthobosor1')
                    {{ $taxs->amount1 }}
                    @elseif($orthoBosor == 'orthobosor2')
                    {{ $taxs->amount2 }}
                    @elseif($orthoBosor == 'orthobosor3')
                    {{ $taxs->amount3 }}
                    @elseif($orthoBosor == 'orthobosor4')
                    {{ $taxs->amount4 }}
                    @elseif($orthoBosor == 'orthobosor5')
                    {{ $taxs->amount5 }}
                    @endif
                     টাকা</th>
            </tr>
            <tr>
                <th>বকেয়া (যদি থাকে ) </th>
                <th>০.০০ টাকা</th>
            </tr>
        </table>
      </div>
      <hr>
      <div class="text-center col-12" style="color:blue">
          <h4 style="font-size:18px">নিয়মিত কর পরিষদ করুন। </h4>
          <p class="mb-0">আপনার কর যাচাই করতে ভিজিট করুন : www.dakshindhurungup.com</p>
      </div>
  </div>
  
</div>


</body>
</html>
