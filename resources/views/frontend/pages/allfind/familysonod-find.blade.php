@extends('frontend.master')
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns pagemh">
                
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                
                </div>
                
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8">
                    <div class="tg-content">
                        <div class="tg-jobs">
                            <div class="tg-heading">
                                <h2> সঠিক সনদ নাম্বার দিয়ে তথ্য যাচাই করুন । </h2>
                                <div class="tg-widget">
                                
                                    <div class="tg-widgetcontent">
                                        <form action="{{route('HoldingFindFromFrontend')}}" method="GET" class="tg-formtheme tg-formsearch" enctype="multipart/form-data">
                                            <fieldset>
                                                <input type="text" name="nid" value="{{ !empty($sodosso) ? $sodosso->nid : '' }}" class="form-control" required placeholder=" সনদ নং লিখুন ">
                                                <button type="submit" class="tg-btnsearch"><i class="icon-magnifier"></i>সার্চ করুন</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tg-themetabs tg-coursestabs">
                                <div class="tab-content tg-themetabcontent">
                                     @if(!empty($sodosso))
                                     <div class="">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>নাম </th>
                                                    <th>হোল্ডিং নং</th>
                                                    <th>এনআইডি নং</th>
                                                    <th>গ্রাম</th>
                                                    <th>ওয়ার্ড</th>
                                                    <th>ধার্যকৃত কর</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $sodosso->khana_prodhaner_name }}</td>
                                                    <td>{{ $sodosso->holding_number }}</td>
                                                    <td>{{ $sodosso->nid }}</td>
                                                    <td>{{ $sodosso->gram }}</td>
                                                    <td>{{ $sodosso->word }}</td>
                                                    <td>{{ $sodosso->apnar_tax }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                     </div>
                                     @else 
                                     <div class="mrms">সঠিক সনদ নাম্বার দিয়ে তথ্য যাচাই করুন ।</div>
                                     @endif
                                    
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