@extends('frontend.master')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
	<div class="container">
		<div class="row">
        <div class="col-md-12">
            <form action="https://amragachiaup.com/includes/protoyon_sonod_code.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="date" value="2024-04-01">
					<div class="card-box formbox">
						<div class="row">
							<div class="col-sm-7">
								<h4 class="page-title txalc">প্রত্যয়নপত্রের জন্য  আবেদন</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card-box">
									<div class="form-group row">
										<label class="col-md-3 col-form-label">আবেদনকারীর নাম </label>
										<div class="col-md-9">
											<input type="text" name="name" required class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label"> জাতীয় পরিচয় পত্র </label>
										<div class="col-md-9">
											<input type="number" name="nid" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label"> জম্ম নিবন্ধন নাম্বার  </label>
										<div class="col-md-9">
											<input type="number" name="birth_id" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label"> পিতার নাম </label>
										<div class="col-md-9">
											<input type="text" name="father" required class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label"> স্বামীর নাম </label>
										<div class="col-md-9">
											<input type="text" name="husband" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">মাতার নাম</label>
										<div class="col-md-9">
											<input type="text" name="mother" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label"> জম্ম তারিখ</label>
										<div class="col-md-9">
											<input type="date" name="dob" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">বৈবাহিক অবস্থা  </label>
										<div class="col-md-9">
											<select name="marital_status" class="form-control">
											    <option value="married">বিবাহিত</option>
											    <option value="unmarried">অবিবাহিত</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">মোবাইল নম্বর </label>
										<div class="col-md-9">
											<input type="number" name="mobile" required class="form-control">
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="card-box">
								    <div class="form-group row">
										<label class="col-md-3 col-form-label"> ওয়ার্ড নম্বর </label>
										<div class="col-md-9">
											<select name="word"  required>
												<option value="">--Select --</option>
												
														<option value="11"> 01 </option>
														<option value="12"> 02 </option>
														<option value="13"> 03 </option>
														<option value="14"> 04 </option>
														<option value="15"> 05 </option>
														<option value="16"> 06 </option>
														<option value="17"> 07 </option>
														<option value="20"> 08 </option>
														<option value="21"> 09 </option>													</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">হোল্ডিং নং </label>
										<div class="col-md-9">
											<input type="number" name="holding_no" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">গ্রাম </label>
										<div class="col-md-9">
											<input type="text" name="village" required class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">ডাকঘর </label>
										<div class="col-md-9">
											<input type="text" name="post_office" required  class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">  প্রত্যয়নপত্রের  ধরন  </label>
										<div class="col-md-9">
											<select name="pro_type"  required>
												<option value="">--Select --</option>
													
														<option value="3"> মৃত্যু সনদপত্র </option>
														<option value="14"> নাগরিকত্ব/জাতীয়তা সনদপত্র </option>
														<option value="16"> বার্ষিক/মাসিক আয়ের সনদপত্র </option>
														<option value="17"> চারিত্রিক সনদ </option>
														<option value="18"> পুনঃবিবাহ না হওয়ার সনদ </option>
														<option value="22"> মানসিক ভারসাম্যহীন প্রত্যয়ন পত্র </option>
														<option value="23"> ভুমিহীন সনদপত্র  </option>
														<option value="24"> অবিবাহিত/বিবাহিত সনদপত্র </option>
														<option value="25"> জাতীয় পরিচয় পত্র নাম সংশোধন প্রত্যয়ন  </option>
														<option value="26"> একই ব্যক্তি প্রত্যয়ন </option>
														<option value="27"> সম্প্রদায় প্রত্যয়নপত্র </option>
														<option value="28"> উপবৃত্তি  প্রদানের প্রত্যয়ন </option>
														<option value="31"> স্থায়ী বাসিন্দা সনদপত্র </option>
														<option value="32"> বেকারত্ব সনদপত্র </option>
														<option value="33"> আর্থিক অসচ্ছলতার প্রত্যয়নপত্র </option>													</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-3 col-form-label">সনদের শিরোনাম </label>
										<div class="col-md-9">
											<input type="text" name="headline" required class="form-control">
										</div>
									</div>
								
									<div class="form-group row">
										<label class="col-md-3 col-form-label">বিস্তারিত </label>
										<div class="col-md-9">
											<textarea type="text" name="details" class="form-control" rows="3"></textarea>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-md-3 col-form-label">ছবি  </label>
										<div class="col-md-9">
											<input type="file" name="photo" accept=".JPG, .JPEG, .PNG" class="form-control">
										</div>
									</div>
							
								</div>
							</div>
						</div>
					
					<div class="text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
					
                
				</div>
			</form>
        </div>
    </div>
	</div>
</main>
@endsection