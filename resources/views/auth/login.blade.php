<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from amragachiaup.com/aup/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 22:23:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</title>
<link rel="stylesheet" href="{{asset('new_frontend')}}/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="{{asset('new_frontend')}}/aup/assets/login/style.css"> 
</head>
<body class="">
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="header">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="logo left">
                            <a href = "#"> <img src="{{asset('new_frontend')}}/images/logo/union_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-6 col-xs-6">
                        <div class="logo-text">
                            <h1> ২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ<h1> 
                            <p>কুতুবদিয়া, কক্সবাজার </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="ticker notices">
                    <marquee behavior="scroll" scrollamount="3" direction="left" onmouseover="stop();"onmouseout="start();" class="marquee">
					`<a class="notice" href="#"> “ প্রতিষ্ঠান হলে স্মার্ট , সেবা পাবে তাৎক্ষণাত” - সৌজন্য : মোঃ মাজিদুল ইসলাম </a>
                    </marquee>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" style="z-index: 99999">
                <div class="login-body">
					 
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="login-left">
                            <h3>নোটিশ বোর্ড</h3>
                            <ul class="notices">
                               <li>
								<a class="notice"href="#">&#34;ইউনিয়ন পরিষদ হলে স্মার্ট, সেবা পাবে তাৎক্ষণাত&#34; - সৌজন্য : মোঃ মাজিদুল ইসলাম </a>
                               </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                        <div class="login-right">
                            <h3>আপনার অ্যাকাউন্টে লগ ইন করুন</h3>
							 
                            <div class="form-group has-feedback has-feedback-left">
                                <div class="form-control-feedback"><i class="glyphicon glyphicon-user"></i></div>
                                <input class="form-control" placeholder=" ইমেইল" required name="email" type="email">
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <div class="form-control-feedback"><i class="glyphicon glyphicon-lock"></i></div>
                                <input class="form-control" placeholder="পাসওয়ার্ড" required name="password" type="password">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-6 text-right">
									<button type="submit" name="login" class="btn btn-info" >প্রবেশ  <i class="glyphicon glyphicon-circle-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-footer">
                        <p class="">স্মার্ট বাংলাদেশ বিনির্মানে প্রয়োজন স্মার্ট ইউনিয়ন পরিষদ ও  স্মার্ট নাগরিক সেবা</p/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!-- Mirrored from amragachiaup.com/aup/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 22:23:24 GMT -->
</html>