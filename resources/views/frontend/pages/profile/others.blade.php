@extends('frontend.master')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-lg-3">
                    <div id="tg-content" class="tg-content">
                        <section class="tg-sectionspace tg-haslayout">
                            <div class="tg-widgettitle"><h3>নাই</h3></div>
                            <div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
                                <figure><img src="{{asset('backend/staff/empty.jpg')}}" width="300"></figure>
                                <div class="tg-shortcodetextbox">
                                    <div class="tg-description welcomems">
                                       <div>উদ্যোক্তা ও অন্যান্য</div>
                                       <div><i class="icon-phone-handset"></i> নাই</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <section class="tg-sectionspace tg-haslayout">
                            <div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
                                <div class="tg-shortcodetextbox">
                                    <div class="tg-description pagebox">
                                                                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</main>
@endsection