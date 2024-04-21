@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>ওয়ারেশনামা</h4>
      <p class="mg-b-0">ওয়ারেশনামার তথ্য ম্যানেজ করুন </p>
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
                          <th>ইউনিয়ন<th>
                          <th>ওয়ার্ড নম্বর</th>
                          <th>গ্রাম</th>
                          <th>বাড়ির মালিকের নাম</th>
                          <th>পুত্রের  সংখ্যা </th>
                          <th>কন্যার সংখ্যা </th>
                          <th>পিতা / স্বামীর সংখ্যা </th>
                          <th>ভ্রাতা/বোনের সংখ্যা  </th>
                          <th>মোট সদস্য</th>
                          <th>অ্যাকশন</th>
                        </tr>
                      </thead> 
        
                      <tbody>
                        @php $sl=1 @endphp
                        @foreach ($wareshes as $data)
                          <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $data->union }}</td>
                            <td></td>
                            <td>{{ $data->word_no }}</td>
                            <td>{{ $data->village }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->son }}</td>
                            <td>{{ $data->daughter }}</td>
                            <td>{{ $data->guardian }}</td>
                            <td>{{ $data->brother }}</td>
                            <td>{{ $data->total }}</td>
                            <td>
                              <a href="{{ Route('wareshinfo.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <a href="{{ Route('single.warish', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
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
                                আপনি কি এই ওয়ারেশনামার তথ্য মুছতে চান ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">না</button>
                                <a href="{{  Route('wareshinfo.delete', $data->id) }}" class="btn btn-danger">হ্যাঁ </a>
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
                </div>
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection