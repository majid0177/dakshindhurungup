@extends('frontend.master')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-md-12">
							<form action="{{route('warish.store')}}" method="POST">
								@csrf
								<input type="hidden" name="ap_date" class="form-control" placeholder="Date" value="2024-04-01">
								<input type="hidden" name="ap_application" class="form-control" value="1">	
								<div class="col-sm-12"><h4 class="ttle">আবেদনকারীর তথ্য   </h4></div>
								<div class="card-box applybox">
									<div class="row">
                                        <div class="col-md-6">
        									<div class="card-box">
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">আবেদনকারীর নাম </label>
    												<div class="col-md-9">
    													<input type="text" name="ap_name" required class="form-control">
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">জাতীয় পরিচয় পত্র</label>
    												<div class="col-md-9">
    													<input type="number" name="nid" class="form-control">
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label"> জম্ম নিবন্ধন নাম্বার </label>
    												<div class="col-md-9">
    													<input type="number" name="birth_id" class="form-control">
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label"> পিতার নাম </label>
    												<div class="col-md-9">
    													<input type="text" required name="father" class="form-control">
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label"> স্বামীর/স্ত্রীর নাম </label>
    												<div class="col-md-9">
    													<input type="text" name="husband" class="form-control">
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">মাতার নাম</label>
    												<div class="col-md-9">
    													<input type="text" required name="mother" class="form-control">
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
    													<select required name="marital_status" class="form-control">
    													    <option value="married">বিবাহিত</option>
    													    <option value="unmarried">অবিবাহিত</option>
    													</select>
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">মোবাইল নম্বর </label>
    												<div class="col-md-9">
    													<input type="number" required name="mobile" class="form-control">
    												</div>
    											</div>
    											
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label"> হোল্ডিং নং  </label>
    												<div class="col-md-9">
    													<input type="number" name="holding" class="form-control">
    												</div>
    											</div>
    											
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">ওয়ার্ড নম্বর</label>
    												<div class="col-md-9">
    													<select name="ward" required>
    														<option value="">--Select --</option>
    														
    															<option value="11"> 01 </option>
    															<option value="12"> 02 </option>
    															<option value="13"> 03 </option>
    															<option value="14"> 04 </option>
    															<option value="15"> 05 </option>
    															<option value="16"> 06 </option>
    															<option value="17"> 07 </option>
    															<option value="20"> 08 </option>
    															<option value="21"> 09 </option>    													</select>
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">ডাকঘর </label>
    												<div class="col-md-9">
    													<input type="text" name="post_office" class="form-control">
    												</div>
    											</div>
    											<div class="form-group row">
    												<label class="col-md-3 col-form-label">গ্রাম </label>
    												<div class="col-md-9">
    													<input type="text" name="village" class="form-control">
    												</div>
    											</div>
        									
        									</div>
        								</div>
        								
        								<div class="col-md-6">
        									<div class="card-box">
        											<div class="form-group row">
        												<h4 class="card-title">  মৃত ব্যক্তির তথ্য</h4>
        											</div>
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label"> নাম </label>
        												<div class="col-md-9">
        													<input type="text" name="wr_name" required class="form-control">
        												</div>
        											</div>
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label"> জাতীয় পরিচয় পত্র </label>
        												<div class="col-md-9">
        													<input type="number" name="wr_nid"  class="form-control">
        												</div>
        											</div>
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label"> পিতার নাম </label>
        												<div class="col-md-9">
        													<input type="text" name="wr_father" required class="form-control">
        												</div>
        											</div>
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label"> স্বামীর নাম </label>
        												<div class="col-md-9">
        													<input type="text" name="wr_husband" class="form-control">
        												</div>
        											</div>
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label">মাতার নাম</label>
        												<div class="col-md-9">
        													<input type="text" name="wr_mother" required class="form-control">
        												</div>
        											</div>
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label">ওয়ার্ড নম্বর</label>
        												<div class="col-md-9">
        													<select name="wr_word" required>
        														<option value="">--Select --</option>
        														
        															<option value="11"> 01 </option>
        															<option value="12"> 02 </option>
        															<option value="13"> 03 </option>
        															<option value="14"> 04 </option>
        															<option value="15"> 05 </option>
        															<option value="16"> 06 </option>
        															<option value="17"> 07 </option>
        															<option value="20"> 08 </option>
        															<option value="21"> 09 </option>        														
        													</select>
        												</div>
        											</div>
        											
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label">গ্রাম </label>
        												<div class="col-md-9">
        													<input type="text" name="wr_village" class="form-control">
        												</div>
        											</div>
        											
        											<div class="form-group row">
        												<label class="col-md-3 col-form-label">বিস্তারিত </label>
        												<div class="col-md-9">
        													<textarea type="text" name="details" class="form-control"></textarea>
        												</div>
        											</div>
        											
        									
        									</div>
        								</div>
        								
                                    </div>
									
									<div class="row">
        								<div class="col-md-12">
        									<div class="card-box">
        										<h4 class="ttle2"> ওয়ারিশগনের তথ্য দিন  </h4>
        										<div class="form-group row">
        											<div class="col-md-12" style="overflow-x:auto;">
        												<table data-dynamicrows class="table table-bordered table-striped">
        												  <thead>
        													<tr>
        													  <th width="10%">ক্রমিক নং</th>
        													  <th>নাম</th>
        													  <th>সম্পর্ক</th>
        													  <th>জম্ম তারিখ</th>
        													  <th>জাতীয় পরিচয়পত্র/জন্মনিবন্ধন নং</th>
        													  <th>মন্তব্য</th>
        													  <th>যোগ করুন</th>
        													</tr>
        												  </thead>
        												  <tbody>
        													<tr>
        													  <input type="hidden" name="warish_id[]" class="form-control">
        													  <td><input type="number" name="b_slno[]" class="form-control"></td>
        													  <td><input type="text" name="b_name[]"  class="form-control"></td>
        													  <td><input type="text" name="b_relation[]"  class="form-control"></td>
        													  <td><input type="date" name="b_date[]"  class="form-control"></td>
        													  <td><input type="number" name="b_nid[]"  class="form-control"></td>
        													  <td><input type="text" name="b_comments[]"  class="form-control"></td>
        													  <td>
        														<i class="fa fa-minus" data-remove></i>
        														<!--<i class="fa fa-arrows" data-move></i>-->
        														<i class="fa fa-plus" data-add></i>
        													  </td>
        													</tr>
        												  </tbody>
        												</table>
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
			</div>
		</main>
@endsection