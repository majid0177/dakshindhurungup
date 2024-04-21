@extends('frontend.master')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                @php
                    $members = App\Models\Backend\Staff::all();
                @endphp
                @forelse ($members as $member)
                <div class="col-lg-3">
                    <div class="tg-content mmbottm10">
                        <section class="tg-haslayout">
                            <div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
                                <a href="{{route('Allprofile',$member->id)}}">
                                <figure class="mingh" style="width:100%"><img class="img-fluid" src="{{ !empty($member->pic) ? asset('backend/staff/'.$member->pic) : asset('backend/staff/empty.jpg')}}" width="300"></figure>
                                <div class="tg-shortcodetextbox">
                                    <div class="tg-description welcomems">
                                       <div>{{ $member->name }}</div>
                                       <div>{{ $member->surname ?? 'পদবি নাই' }}</div>
                                       <div>মোবাইলঃ {{ $member->mobile }}</div>
                                       <div>{{ $member->gram_word }}</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
                @empty
                <div class="col-lg-3">
                    <div class="tg-content mmbottm10">
                        <section class="tg-haslayout">
                            <div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
                                <a href="#">
                                <figure class="mingh" style="width:100%"></figure>
                                <div class="tg-shortcodetextbox">
                                    <div class="tg-description welcomems">
                                       <div>Data Not Found</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
                @endforelse
                

            </div>
        </div>
    </div>
</main>
@endsection