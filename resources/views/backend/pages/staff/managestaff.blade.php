
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>কর্মকর্তা কর্মচারী</h4>
      <p class="mg-b-0">কর্মকর্তা কর্মচারীর তালিকা পরিচালনা করুন</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
          	 <table class="table" id="mytable">
              <thead>
                <tr>
                  <th>ক্র: নং</th>
                  <th>নাম</th>
                  <th>জাতীয় পরিচয় পত্রের নম্বর</th>
                  <th>পদবী </th>
                  <th>গ্রাম ও ওয়ার্ড নম্বর</th>
                  <th>মোবাইল নম্বর</th>
                  <th>ছবি</th>
                  <th>অবস্থা</th>
                  <th>অ্যাকশন</th>
                </tr>
              </thead> 

              <tbody>
                @php $sl=1 @endphp
                @foreach ($staff as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->nid }}</td>
                    <td>{{ $data->surname }}</td>
                    <td>{{ $data->gram_word }}</td>
                    <td>{{ $data->mobile }}</td>
                    <td>
                        @if($data->pic==null || $data->pic=="")
                        <img height="80" src="{{ asset('backend/staff/empty.jpg')  }}" />
                        @else
                        <img height="80" src="{{ asset('backend/staff/'.$data->pic)  }}" />
                        @endif
                        </td>
                    <td>
                      @if ($data->status==1)
                      <span class="badge badge-info p-1">সক্রিয়</span>
                      @else
                      <span class="badge badge-warning p-1">নিষ্ক্রিয়</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ Route('staff.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
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
        আপনি কি এই সদস্য কে মুছতে চান?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">না</button>
        <a href="{{  Route('staff.delete', $data->id) }}" class="btn btn-danger">হ্যাঁ </a>
      </div>
    </div>
  </div>
</div>
                   @php $sl++ @endphp
                @endforeach
              </tbody>

             </table> 
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection