<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<style>
		.container{
			border: 2px solid green;
		}
		h2{
			color: #a00;
			text-shadow: 0px 2px 2px rgba(203, 1, 1, 0.6);
		}
		span{
			border-bottom: 1px dashed #747373;
			padding-left: 10px;
			padding-right: 10px;
			padding-bottom: 3px;
			font-weight: bold;
		}
		p{
			line-height: 32px;
		}
		.myspan{
		    border-bottom: none;
		    padding:0;
		    font-weight: 500;
		}
		.img1{
           width: 11%;
            float: left;
            position:absolute;
            left: 103px;
            top: 27px;
        }
        @media print {
            .printBtn{
                display:none;
            }
            /*h5{*/
            /*    background:rgba(0,255,0,.9);*/
            /*}*/
        }
        .forimageprint{
	        position:relative;
	    }
        .forimageprint .img{
            position:absolute;
            top:41%;
            left: 58%;
            transform: translateX(-58%);
            opacity:.2;
            z-index:-1;
        }
        .forimageprint img{
            width:70%;
        }
	</style>

	<div class="container mt-3">
		<div class="row py-4">
		    <img class="img1" src="{{ asset('backend/img/unionlogo.png') }}" alt="">
			<div class="col-lg-12 text-center">
				<h6>বিসমিল্লাহির রহমানির রহিম </h6>
				<h2>২ নং উজলকুড় ইউনিয়ন পরিষদ</h2>
				<h6>কার্যালয়: গ্রাম: বড় নবাবপুর, ডাকঘর: ভরসাপুর, কোড নং -৯৩৪১,  </h6>
				<h6>উপজেলা : রামপাল, জেলাঃ বাগেরহাট।  </h6>
				<h6>চেয়ারম্যানঃ মুন্সি বোরহান উদ্দিন  </h6>
				<hr>
				<div class="row mt-1 ">
                	<div class="col-lg-6 text-start pr-5">
                	    সূত্র:
                	</div>
                	<div class="col-lg-6 text-start">
                	    <h6 style="padding-left: 324px;">তারিখ:   </h6>
                	</div>
            	</div>
				<h5 style="margin: 5px 0;background:rgba(0,255,0,.8);color:rgba(0,0,0);border-radius:5px;padding:5px 3px; width:25%; margin:auto">ওয়ারেশ কায়েম সনদপত্র </h5>
			</div>
		</div>
		<div class="row forimageprint">
			<div class="col-lg-12">
			    <div class="img">
        	        <img src="{{ asset('backend/img/unionlogo.png') }}" alt="">
        	    </div>
				<p>জনাব</p>
				<p>এই মর্মে প্রত্যায়ন করা যাইতেছে যে, বাগেরহাট জেলার রামপাল উপজেলাধীন ২নং  উজলকুড় ইউনিয়নের 
				<span>{{$waresh->word_no}}</span> নং  ওয়ার্ডের <span>{{$waresh->village}}</span> গ্রামের নিবাসী 
				<span>{{$waresh->name}}</span> এর  
				<span class="myspan">
				    @php 
				    $deadbodysvalues=json_decode($waresh->deadbody_value);
				    @endphp
				    @foreach($deadbodysvalues as $deadbodyvalue) 
				       
				    {{$deadbodyvalue}}/
				    @endforeach
				</span>
				 <span>{{$waresh->deadbody_name}}</span> এর মৃত্যু অন্তে নিম্নলিখিত
				<span>{{$waresh->son}}</span> পুত্র  <span>{{$waresh->daughter}}</span> কন্যা <span>{{$waresh->guardian}}</span> 
				<span class="myspan">
				    @php 
				    $guardiansvalues=json_decode($waresh->guardian_value);
				    @endphp
				    @foreach($guardiansvalues as $guardianvalue) 
				       
				    {{$guardianvalue}}/
				    @endforeach
				    </span> <span>{{$waresh->brother}}</span> 
				<span class="myspan">
				    @php 
				    $brothervalues=json_decode($waresh->brother_value);
				    @endphp
				    @foreach($brothervalues as $brothervalue) 
				       
				    {{$brothervalue}}/
				    @endforeach</span> মোট 
				<span>{{$waresh->total}}</span> জন ওয়ারেশ রাখিয়া মৃত্যু বরণ করেন। আমি তাহাদের ব্যক্তিগত ভাবে চিনিতাম ও জানিতাম। 
				মৃত্যুকালে তিনি নিম্নলিখিত ওয়ারেশগণ রাখিয়া গিয়াছেন।</p>
			</div>
		</div>
		<div class="row">
          <div class="col-lg-12">
              <table class="table">
                <thead>
                    <tr>
                        <th>ক্রমিক নং </th>
                        <th>ওয়ারেশগণের নাম</th>
                        <th>সম্পর্ক</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    @foreach($wareshgons as $key=>$wareshgon)
                    	<tr>
                    		<td>{{$key+1}}</td>
                    		<td>{{$wareshgon->name}}</td>
                    		<td>{{$wareshgon->relation}}</td>
                    	</tr>
                    @endforeach
                </tbody>
            </table>
            <p class="text-center pt-5 mb-0">আমি উল্লেখিত ওয়ারিশগণের সার্বিক সাফল্য ও মঙ্গল কামনা করি। </p>
            <p class="text-center pt-1">ধন্যবাদান্তে</p>
            <!--<button  onclick="window.print()"  class=" btn btn-info w-25 d-inline p-2 mb-5" style="padding:13px 0 !important" > <i class="fas fa-print"></i></button>-->
          </div>
          </div>
          
          <div class="row mt-3 mt-5 ">
            	
            	<div class="col-lg-6 text-start">
            	    <h6>সচিব </h6>
            	</div>
            	<div class="col-lg-6 text-end">
            	    <h6>চেয়ারম্যান </h6>
            	</div>
        	</div>
	</div>
	
	<div class="row printBtn">
        <div class="col-md-12 text-center">
            <input class="btn btn-info w-25 my-4" type="button" onclick="window.print()" value="Print">
        </div>
    </div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
@include('backend.includes.scripts')