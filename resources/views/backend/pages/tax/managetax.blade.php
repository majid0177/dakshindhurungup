
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
                    <th>ক্রমিক নং</th>
                    <th> তারিখ</th>
                    <th> অর্থবছর </th>
                    <th>হোল্ডিং নম্বর </th>
                    <th>নাম </th>
                    <th>ধার্যকৃত কর </th>
                    <th>কর আদায়</th>
                    <th>মন্তব্য</th>
                  <th>অ্যাকশন</th>
                </tr>
              </thead> 

              <tbody>
                @php $sl=1 @endphp
                @foreach ($taxs as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->payDate1 ?? ''}}</td>
                    <td>{{ $data->orthobosor1  ?? ''}}</td>
                    <td>{{ $data->sodosso->holding_number  ?? ''}}</td>
                    <td>{{ $data->sodosso->khankar_prothaner_nam  ?? ''}}</td>
                    <td>{{ $data->sodosso->apnar_tax }}</td>
                    <td>{{ $data->amount1 }}</td>
                    <td>{{ $data->note1 }}</td>
                    <td>
                      <a href="{{ Route('tax.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-target='#delete{{ $data->id }}' data-toggle="modal"></i></button>
                      <a href="{{ route('taxprint1',$data->sodosso_id) }}" class="btn btn-sm btn-info"><i class="fas fa-print"></i></a>
                      
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
        <a href="{{  Route('tax.delete', $data->id) }}" class="btn btn-danger">হ্যাঁ </a>
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