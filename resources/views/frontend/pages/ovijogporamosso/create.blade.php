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
                                <h2> অভিযোগ করুন অথবা পরামর্শ দিন  </h2>
                            </div>
                            <div class="tg-themetabs tg-coursestabs pagebox">
                                <div class="tab-content tg-themetabcontent">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="https://amragachiaup.com/includes/complain_store_code.php" method="POST" enctype="multipart/form-data">
                                            <div class="card-box">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">আপনার নাম </label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="name" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">মোবাইল নম্বর </label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="mobile" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label"> ইমেইল </label>
                                                    <div class="col-md-9">
                                                        <input type="email" name="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">অভিযোগ  / পরামর্শ</label>
                                                    <div class="col-md-9">
                                                        <textarea type="text" name="details" required class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">ফাইল  </label>
                                                    <div class="col-md-9">
                                                        <input type="file" name="photo" accept=".JPG, .PNG" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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