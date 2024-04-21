<header id="tg-header" class="tg-header tg-haslayout">
	<div class="">
		<div class="row headlogo">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tg-logoandnoticeboard text-center">
					<a href="index.html"><img class="logow" src="{{ asset('new_frontend') }}/images/logo/union_logo.png" style="width: 120px;" alt="image"><span class="lrgw">২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</span></a>
					<img class="bnlogo" src="{{ asset('new_frontend') }}/images/logo/logo.png" style="width: 120px;" alt="logo">
					<div class="logoaddr">কুতুবদিয়া, কক্সবাজার</div>
				</div>
			</div>
		</div>
		<div class="tg-navigationarea ">
			<nav id="tg-nav" class="tg-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
					<ul>
						<li><a href="{{route('/')}}">হোম</a></li>
						<li class="menu-item-has-children">
							<a href="javascript:void(0);">বর্তমান পরিষদ</a>
							<ul class="sub-menu">
            					<li><a href="{{route('profile.chairman')}}">চেয়ারম্যান প্রোফাইল</a></li>
            					<li><a href="{{route('profile.sochib')}}">সচিব প্রোফাইল</a></li>
            					<li><a href="{{route('profile.panelchairman')}}">প্যানেল চেয়ারম্যান প্রোফাইল</a></li>
            					<li><a href="{{route('profile.upmembers')}}"> ইউপি সদস্যবৃন্দ তালিকা</a></li>
            					<li><a href="{{route('profile.grampolice')}}">গ্রামপুলিশের তালিকা</a></li>
            					<li><a href="{{route('profile.others')}}"> উদ্যোক্তা ও অন্যান্য</a></li>
							</ul>
						</li>
						<li>
							<a> <form action="{{route('HoldingFindFromFrontend')}}" method="GET"><button style="background:transparent;width:100%">হোল্ডিং তথ্য যাচাই</button> </form></a>
						</li>
						<li class="menu-item-has-children">
							<a href="javascript:void(0);">ট্রেড লাইসেন্স </a>
							<ul class="sub-menu">
            					<li><a href="trade-license-apply.html">ট্রেড লাইসেন্স আবেদন করুন </a></li>
            					<li><a href="license-renew-apply.html">ট্রেড লাইসেন্স নবায়ন করুন </a></li>
            					<li><a href="business-info.html">ট্রেড লাইসেন্স যাচাই করুন</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="javascript:void(0);">ওয়ারিশ সনদ </a>
							<ul class="sub-menu">
            					<li><a href="{{ route('warish.create') }}">ওয়ারিশ সনদ আবেদন </a></li>
            					<li><a><form action="{{route('warishsonodFromFrontend')}}" method="GET"><button class="text-left" style="background:transparent;width:100%">ওয়ারিশ সনদ যাচাই</button> </form> </a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="javascript:void(0);">পারিবারিক সনদ </a>
							<ul class="sub-menu">
            					<li><a href="{{ route('family.create') }}">পারিবারিক সনদের আবেদন </a></li>
								<li><a><form action="{{route('familysonodFromFrontend')}}" method="GET"><button class="text-left" style="background:transparent;width:100%">পারিবারিক সনদ যাচাই </button> </form> </a></li>
            					
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="javascript:void(0);">সকল প্রকার সনদ </a>
							<ul class="sub-menu">
            					<li><a href="{{ route('allsonod.create') }}">সনদের আবেদন </a>
								</li><li><a><form action="{{route('allsonodFromFrontend')}}" method="GET"><button class="text-left" style="background:transparent;width:100%">সনদ যাচাই </button> </form> </a></li>
            				</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="javascript:void(0);">উপকারভোগীর তালিকা</a>
							<ul class="sub-menu">
            					<li><a href="{{route('upokarvogitalika')}}">উপকারভোগীর  তালিকা </a></li>
								</li><li><a><form action="{{route('upokarvugiFromFrontend')}}" method="GET"><button class="text-left" style="background:transparent;width:100%">উপকারভোগী যাচাই</button> </form> </a></li>
            				</ul>
						</li>
						<li><a href="{{route('Allnotice')}}">নোটিশ  </a></li>
						<li><a href="{{route('Allprokolpo')}}">প্রকল্প  </a></li>
						<li><a href="{{route('createFrontend')}}">অভিযোগ/পরার্মশ  </a></li>
					<li><a href="{{route('citizencharter')}}"> সিটিজেন চার্টার  </a></li>
						<li><a href="{{route('photogallery')}}">ফটো গ্যালারি  </a></li>
						<li><a href="{{route('videogallery')}}">ভিডিও গ্যালারি  </a></li>
						{{-- <li class="menu-item-has-children">
							<a href="javascript:void(0);">অন্যান্য </a>
							<ul class="sub-menu">
								
            						<li><a href="page/20.html">এক নজরে ২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</a></li>
            						<li><a href="page/22.html">ভাষা ও সংস্কৃতি</a></li>
            						<li><a href="page/23.html">দর্শনীয় স্থান</a></li>
            						<li><a href="page/24.html">যোগাযোগ ব্যবস্থা</a></li>
            						<li><a href="page/25.html">ওয়ার্ডভিত্তিক লোকসংখ্যা</a></li>
            						<li><a href="page/26.html">খাল ও নদী</a></li>
            						<li><a href="page/27.html">গ্রাম আদালত বিধিমালা</a></li>
            						<li><a href="page/28.html">ইউনিয়ন পরিষদ আইন-২০০৯</a></li>
            						<li><a href="page/29.html">৩নং আমড়াগাছিয়া ইউনিয়নের ইতিহাস </a></li>
            						<li><a href="page/30.html">ইউনিয়নের মানচিত্র</a></li>
            						<li><a href="page/31.html">হাট বাজার</a></li>
            						<li><a href="page/32.html">ইউনিয়ন পরিষদ এর কার্যবলী</a></li>
            						<li><a href="page/33.html">ইউনিয়ন পরিষদের পূর্বতন চেয়ারম্যানবৃন্দ</a></li>
            						<li><a href="page/34.html">ইউনিয়ন স্বাস্থ্য কেন্দ্র </a></li>
            						<li><a href="page/35.html"> উপ-সহকারী কৃষি কর্মকর্তা</a></li>
            						<li><a href="page/36.html">প্রধান কার্যাবলী </a></li>
            						<li><a href="page/37.html">হাসপাতাল/স্বাস্থ্য কেন্দ্র</a></li>
            						<li><a href="page/38.html">স্বাস্থ্যকর্মীর তালিকা </a></li>
            						<li><a href="page/39.html">রেজিস্টার্ড ডাক্তার</a></li>
            						<li><a href="page/41.html">  প্রখত্য ব্যক্তিত্য</a></li>
            						<li><a href="page/42.html">অন্যান্য প্রতিষ্টান সমূহ তালিকা</a></li>
            						<li><a href="page/43.html">একটি বাড়ি একটি খামার</a></li>							</ul>
						</li> --}}
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
			    <div class="noticettl">সর্বশেষ নোটিশ</div>
			 </div>
			 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-10">
			    <div class="marueee">
                <marquee scrollamount="3" scrolldelay="10" direction="left" loop="-1" behavior="scroll" id="marque_header" onmouseover="document.getElementById('marque_header').stop();" onmouseout="document.getElementById('marque_header').start();">
					
						<i class="fa fa-arrow-right"></i> <a href="javascript:void(0);">&#34;ইউনিয়ন পরিষদ হলে স্মার্ট, সেবা পাবে তাৎক্ষণাত&#34; - সৌজন্য : মোঃ মাজিদুল ইসলাম</a>
						<i class="fa fa-arrow-right"></i> <a href="javascript:void(0);">সকল হোল্ডিং মালিকদের নিয়মিত হোল্ডিং ট্যাক্স পরিশোধ করার জন্য বিশেষভাবে অনুরোধ করা হইল।</a>				</marquee>
            </div>
			 </div>
		</div>
	</div>
</header>