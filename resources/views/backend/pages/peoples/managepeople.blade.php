
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>তালিকা</h4>
      <p class="mg-b-0">রেজিস্টার সদস্যদের তালিকা</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</h2>
            <h4>ডাকঘরঃ ধুরুং, উপজেলাঃ কুতুবদিয়া</h4>
            <h5>জেলাঃ কক্সবাজার, বাংলাদেশ </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          	 <table class="table" id="mytable">
              <thead>
                <tr>
                  <th>ক্র: নং</th>
                  <!--<th>অ্যাসেসমেন্ট নং</th>-->
                  <th>হোল্ডিং নং</th>
                  <th>নাম</th>
                  <th>ভোটার আইডি</th>
                  <th>মোবাইল নম্বর</th>
                  <th>পিতার নাম</th>
                  <th>গ্রাম</th>
                  <th>পেশা</th>
                  <th>ট্যাক্স</th>
                  <th>অ্যাকশন</th>
                </tr>
              </thead> 
              <tbody>
                @php 
                  $sodossos = App\Models\Sodosso::all();$sl=1; @endphp
                @forelse ($sodossos as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->holding_number }}</td>
                    <td>{{ $data->khana_prodhaner_name }}</td>
                    <td>{{ $data->nid }}</td>
                    <td>{{ $data->mobile }}</td>
                    <td>{{ $data->pitar_nam }}</td>
                    <td>{{ $data->gram }}</td>
                    <td>{{ $data->pesha }}</td>
                    <td>{{ $data->apnar_tax }}</td>
                    <td>
                      <a href="{{ Route('sodosso.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                      <a href="{{ Route('peoples.show', $data->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
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
        <a href="{{  Route('peoples.delete', $data->id) }}" class="btn btn-danger">হ্যাঁ </a>
      </div>
    </div>
  </div>
</div>
                   @php $sl++ @endphp
                @endforeach
              </tbody>

             </table>
             <button class="btn btn-info"><i class="fas fa-print"></i> Print Page</button>
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection