@extends('frontend.master')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8">
                    <div class="tg-content">
                        <div class="tg-jobs">
                            <div class="tg-heading">
                                <div class="tg-widgettitle"><h3>নোটিশ বোর্ড</h3></div>
                            </div>
                            <div class="tg-themecollapsecontent pagebox">
                                <table>
                                  <tr>
                                    <th width="20%">প্রকাশ</th>
                                    <th>বিজ্ঞপ্তি </th>
                                    <th></th>
                                  </tr>                                    <tr>
                                            <td>০৩-০৩-২০২৪ ইং</td>
                                            <td><a class="nottle" href="">&#34;ইউনিয়ন পরিষদ হলে স্মার্ট, সেবা পাবে তাৎক্ষণাত&#34; - সৌজন্য : মোঃ মাজিদুল ইসলাম</a></td>
                                            <td>
                                                <button class="btn btn-success" id="printNoticeButton10">প্রিন্ট </button>
                                                <iframe style="display:none;" id="printNoticeIframe10" src="notice-print2f0e.html?notice_id=10"></iframe>
                                                <script>
                                                  document.getElementById("printNoticeButton10").addEventListener("click", function() {
                                                    var iframe = document.getElementById("printNoticeIframe10");
                                                    iframe.contentWindow.print();
                                                  });
                                                </script>
                                            </td>
                                        </tr>                              <tr>
                                            <td>০১-০৩-২০২৪ ইং</td>
                                            <td><a class="nottle" href="">সকল হোল্ডিং মালিকদের নিয়মিত হোল্ডিং ট্যাক্স পরিশোধ করার জন্য বিশেষভাবে অনুরোধ করা হইল।</a></td>
                                            <td>
                                                <button class="btn btn-success" id="printNoticeButton9">প্রিন্ট </button>
                                                <iframe style="display:none;" id="printNoticeIframe9" src="notice-print891c.html?notice_id=9"></iframe>
                                                <script>
                                                  document.getElementById("printNoticeButton9").addEventListener("click", function() {
                                                    var iframe = document.getElementById("printNoticeIframe9");
                                                    iframe.contentWindow.print();
                                                  });
                                                </script>
                                            </td>
                                        </tr>
                                        
                                                                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection