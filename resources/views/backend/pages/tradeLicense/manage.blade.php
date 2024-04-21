@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>ট্রেড লাইসেন্স </h4>
      <p class="mg-b-0">ট্রেড লাইসেন্সের  তথ্য ম্যানেজ করুন </p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
              <!--<div class="bg-white rounded overflow-hidden">-->
              <!--  <div class="pd-x-20 pd-t-20 ">-->
                  	 <table class="table" id="mytable">
                      <thead>
                        <tr>
                          <th>ক্র: নং</th>
                          <th>প্রতিষ্ঠানের নাম </th>
                          <th>প্রতিষ্ঠানের স্থান </th>
                          <th>প্রোপাইটরের নাম</th>
                          <th>পিতা / স্বামীর নাম</th>
                          <th>গ্রাম</th>
                          <th>ডাকঘর </th>
                          <th>উপজেলা</th>
                          <th>জেলা </th>
                          <th>বর্তমান ব্যবসা</th>
                          <th>লাইসেন্স ফি</th>
                          <th>বকেয়া ফি</th>
                          <th>জরিমানা </th>
                          <th>নবায়ন ফি</th>
                          <th>ভ্যাট %</th>
                          <th>মোট </th>
                          <th>লাইসেন্স মেয়াদ </th>
                          <th>অ্যাকশন </th>
                        </tr>
                      </thead> 
        
                      <tbody>
                        @php $sl=1 @endphp
                        @foreach ($trades as $data)
                          <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $data->organization_name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->maliker_name }}</td>
                            <td>{{ $data->father_name }}</td>
                            <td>{{ $data->village }}</td>
                            <td>{{ $data->postoffice }}</td>
                            <td>{{ $data->thana }}</td>
                            <td>{{ $data->zela }}</td>
                            <td>{{ $data->present_business }}</td>
                            <td>{{ $data->license_fee }}</td>
                            <td>{{ $data->bokeya }}</td>
                            <td>{{ $data->jorimana }}</td>
                            <td>{{ $data->nobayon_fee }}</td>
                            <td>{{ $data->vat }}</td>
                            <td>{{ $data->total }}</td>
                            <td>{{ $data->expire_date }}</td>
                            <td>
                              <a href="{{ Route('tradelicense.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
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
                                আপনি কি এই ট্রেড লাইসেন্স মুছতে চান ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">না</button>
                                <a href="{{  Route('tradelicense.delete', $data->id) }}" class="btn btn-danger">হ্যাঁ </a>
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