@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
</div>
    
      <div class="br-pagebody">
        <div class="row mb-1">
            <div class="col-lg-12">
              <div class="bg-white rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 pb-5">
                  <table border="1" class="table">
                    <thead>
                        <tr>
                            <th colspan="8" style="text-align:center;" class="h2">০২ নং উজলকুর ইউনিয়ন পরিষদ</th>
                        </tr>
                        <tr>
                            <th colspan="8" style="text-align:center;" class="h3"> রামপাল, বাগেরহাট</th>
                            <hr>
                        </tr>
                      <tr>
                        <th>ওয়ার্ড নং</th>
                        <th>গ্রাম</th>
                        <th>বাড়ির মালিকের নাম </th>
                        <th>পুত্রের সংখ্যা </th>
                        <th>কন্যার সংখ্যা </th>
                        <th>পিতা / স্বামীর সংখ্যা</th>
                        <th>ভ্রাতা / বোনের সংখ্যা </th>
                        <th>মোট সদস্য </th>
                      </tr>
                    </thead>
                    <tbody>
                      <td>{{$wareshinfos->word_no}}</td>
                      <td>{{$wareshinfos->village}}</td>
                      <td>{{$wareshinfos->name}}</td>
                      <td>{{$wareshinfos->son}}</td>
                      <td>{{$wareshinfos->daughter}}</td>
                      <td>{{$wareshinfos->guardian}}</td>
                      <td>{{$wareshinfos->brother}}</td>
                      <td>{{$wareshinfos->total}}</td>
                      <!--<td>{{$wareshinfos->id}}</td>-->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div><!-- br-pagebody -->
      
      
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>ওয়ারেশগনের নাম যুক্ত করুন  </h4>
        </div>
    </div>
    
    
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="msg">
                
                </div>
            </div>
        </div>
          <div class="bg-white rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 ">
                <div class="row">
                  <div class="col-sm-2">
                      <div class="form-group">
                          <label for="waresh_infoId">আইডি</label> 
                          <input type="text" name="waresh_infoId" id="waresh_infoId" class="form-control waresh_infoId"  value="{{$wareshinfos->id}}" readonly="">
                          <span class="text-danger">
                            @error('waresh_infoId')
                              {{ $message }}
                            @enderror
                          </span>
                     </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-group">
                          <label for="name">ওয়ারেশের নাম</label> 
                          <input type="text" name="name" id="name" class="form-control name" >
                          <span class="text-danger">
                            @error('name')
                              {{ $message }}
                            @enderror
                          </span>
                     </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-group">
                          <label for="relation">সম্পর্ক</label> 
                          <input type="text" name="relation" id="relation" class="form-control relation" >
                          <span class="text-danger">
                            @error('relation')
                              {{ $message }}
                            @enderror
                          </span>
                     </div>
                  </div>
                  <div class="col-sm-2">
                      <label for=""></label>
                      <button class="form-control btn btn-info w-100 mt-1 add" >যোগ করুন</button>
                  </div>
                  <div class="col-sm-2">
                      <label for=""></label>
                      <a href="{{ Route('single.warish', $wareshinfos->id) }}" class="form-control btn btn-success w-100 mt-1" >সনদপত্র প্রিন্ট করুন </a>
                  </div>
                  
                  </div><!-- col-3 -->
            </div>
        </div>
      </div><!-- br-pagebody -->
      
      
     <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>ওয়ারেশগনের নাম  </h4>
        </div>
    </div>
    
    <div class="br-pagebody">
          <div class="bg-white rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 ">
                <div class="row">
                  <div class="col-lg-12">
                      <table class="table">
                        <thead>
                            <tr>
                                <th>ক্রমিক নং </th>
                                <th>ওয়ারেশগণের নাম</th>
                                <th>সম্পর্ক</th
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            
                        </tbody>
                    </table>
                  </div>
                  
                  </div><!-- col-3 -->
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection

@section('footer_script')     
<script>
    jQuery(document).ready(function(){
        
        showdata();
        function showdata(){
            var waresh_infoId= jQuery('.waresh_infoId').val();
            $.ajax({
               url:'/admin/wareshgon/manage/'+waresh_infoId,
               type:'get',
               dataType:'json',
               success:function(result){
                   var sl= 1;
                   jQuery('.tbody').html('');
                   $.each(result.data, function(key, item){
                       jQuery('.tbody').append('<tr>\
                                <td>'+sl+'</td>\
                                <td>1</td>\
                                <td>'+item.name+'</td>\
                                <td>'+item.relation+'</td>\
                            </tr>');
                        sl++;
                   });
                   
               }
            });
        }
        
        
        jQuery(document).on('click', '.add', function(){
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
           var waresh_infoId= jQuery('.waresh_infoId').val();
           var name= jQuery('.name').val();
           var relation= jQuery('.relation').val();
           
           $.ajax({
               url:'/admin/wareshgon/insert/'+waresh_infoId,
              type:'post',
              dataType:'json',
              data:{
                  'waresh_infoId':waresh_infoId,
                  'name':name,
                  'relation':relation,
              },
              success:function(result){
                  showdata();
                  jQuery('.msg').append('<div class="alert alert-success">'+result.msg+'</div>');
                  jQuery('.name').val('');
                  jQuery('.relation').val('');
                  jQuery('.msg').fadeOut(5000);
              }
              
           });
        });
    });
</script>
@endsection