@include('backend.includes.css')
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
</head>

<body style="background: white">

  <div class="" style="text-align: center">
      <div class="top p-3">
            <div class="form-group w-25 m-auto">
                <select name="word_no" id="search_word_no" class="form-control w-50 d-inline">      
                <option value="">----- ওয়ার্ড নম্বর সিলেক্ট করুন -----</option>
                      <option value="সমস্ত তত্ত্ব ">সমস্ত তত্ত্ব </option>
                      <option value="১">ওয়ার্ড নং : ১</option>
                      <option value="২">ওয়ার্ড নং : ২</option>
                      <option value="৩">ওয়ার্ড নং : ৩</option>
                      <option value="৪">ওয়ার্ড নং : ৪</option>
                      <option value="৫">ওয়ার্ড নং : ৫</option>
                      <option value="৬">ওয়ার্ড নং : ৬</option>
                      <option value="৭">ওয়ার্ড নং : ৭</option>
                      <option value="৮">ওয়ার্ড নং : ৮</option>
                      <option value="৯">ওয়ার্ড নং : ৯</option>
                </select>
                <button  onclick="window.print()"  class=" btn btn-info w-25 d-inline p-2" style="padding:13px 0 !important" > <i class="fas fa-print"></i></button>
            </div>
        </div>
    <h2 style="margin: 10px 0">২ নং উজলকুড় ইউনিয়ন পরিষদ</h2>
    <h4 style="margin: 10px 0">রামপাল, বাগেরহাট । </h4>
		<h5 style="margin: 5px 0">এসেসমেন্ট তালিকা</h5>
		<p style="margin: 10px 0; font-size: 14px">ওয়ার্ড নং : <span class="textword"></span></p>
    <br/>
  </div>
  <table border="1">

    <thead><div class="page-header-space">

      <tr>
          
        <th rowspan="2">হোল্ডিং নং</th>
		<th rowspan="2">বাড়ির মালিকের নাম</th>
		<th rowspan="2">&nbsp;পিত/স্বামীর নাম&nbsp;</th>
		<th rowspan="2">পেশা</th>
		<th rowspan="2">এনআইডি নং </th>
		<th rowspan="2">এলাকা/গ্রাম</th>
		<th rowspan="2">&nbsp;সদস্য সংখ্যা&nbsp; </th>
		<th rowspan="2">&nbsp;&nbsp;&nbsp;বাড়ির ধরণ &nbsp;&nbsp;&nbsp;</th>
		<th rowspan="2">&nbsp;ধার্যকৃত কর&nbsp;</th>
		<th colspan="5" class="text-center">অর্থ বছর</th>
		</tr>
		<tr>
		<th>২০২২-২৩</th>
		<th>২০২৩-২৪</th>
		<th>২০২৪-২৫</th>
		<th>২০২৫-২৬</th>
		<th>২০২৬-২৭</th>
		</tr></div>
    </thead>

    <tbody class="data page">

    </tbody>

    <tfoot>
      <tr>
        <td style="border:none">
          <!--place holder for the fixed-position footer-->
          <div class="page-footer-space"></div>
        </td>
      </tr>
    </tfoot>

  </table>

</body>
<style>
.page-header{
  height: 100px;
}

table tr th,
table tr td{
    text-align:center;
}

.page-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}

.page-header {
  position: fixed;
  top: 0mm;
  width: 100%;
  border-bottom: 1px solid black; /* for demo */
  background: yellow; /* for demo */
}

.page {
  page-break-after: always;
}

@page {
  margin: 20mm
}

@media print {
    @page {size: landscape}
   thead {display: table-header-group;} 
   tfoot {display: table-footer-group;}
   
   button {display: none;}
   .top{display: none;}
   body {margin: 10mm;}
}
</style>
@include('backend.includes.scripts')
</html>