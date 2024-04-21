@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>নাগরিক</h4>
      <p class="mg-b-0">নাগরিকের তথ্য ম্যানেজ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
              <div class="bg-white rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 ">
                  	 <table class="table" id="mytable">
                      <thead>
                        <tr>
                          <th>ক্র: নং</th>
                          <th>তারিখ </th>
                          <th>নাগরিকের নাম  </th>
                          <th>পিতা / স্বামীর নাম</th>
                          <th>মাতার নাম </th>
                          <th>গ্রাম</th>
                          <!--<th>ডাকঘর </th>-->
                          <!--<th>উপজেলা</th>-->
                          <!--<th>জেলা </th>-->
                          <!--<th>ইউনিয়ন</th>-->
                          <!--<th>ওয়ার্ড নং</th>-->
                          <!--<th>ভোটার আইডি নং</th>-->
                          <!--<th> জন্ম নিবন্ধন নং </th>-->
                          <!--<th>মোবাইল নং </th>-->
                          <th>ছবি</th>
                          <th>জন্ম তারিখ </th>
                          <th>অ্যাকশন </th>
                        </tr>
                      </thead> 
        
                      <tbody>
                        @php $sl=1 @endphp
                        @foreach ($nagoriks as $data)
                          <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->father_name }}</td>
                            <td>{{ $data->mother_name }}</td>
                            <td>{{ $data->village }}</td>
                            <!--<td>{{ $data->postoffice }}</td>-->
                            <!--<td>{{ $data->thana }}</td>-->
                            <!--<td>{{ $data->zela }}</td>-->
                            <!--<td>{{ $data->nagorikotto_union }}</td>-->
                            <!--<td>{{ $data->word_no }}</td>-->
                            <!--<td>{{ $data->voterId_no }}</td>-->
                            <!--<td>{{ $data->dob_no }}</td>-->
                            <!--<td>{{ $data->phone_no }}</td>-->
                            <td><img height="80" src="{{ asset('backend/nagorik/'.$data->picture)  }}" /></td>
                            <td>{{ $data->dob }}</td>
                            <td>
                              <a href="{{ Route('nagorik.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-target='#delete{{ $data->id }}' data-toggle="modal"></i></button>
                            </td>
                          </tr>
                          <!-- Modal -->
                        <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> নিশ্চিতকরণ বার্তা</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                আপনি কি এই নাগরিককে মুছতে চান ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">না</button>
                                <a href="{{  Route('nagorik.delete', $data->id) }}" class="btn btn-danger">হ্যাঁ </a>
                              </div>
                            </div>
                          </div>
                        </div>
                           @php $sl++ @endphp
                        @endforeach
                      </tbody>
        
                     </table> 
                    </div>
                </div>
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection