@extends('Dashboard.layouts.master')
@section('title')
{{trans('doctor/sidebar.examinations')}}
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

    <link href="{{URL::asset('dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('dashboard/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('dashboard/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{trans('doctor/sidebar.examinations')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('doctor/sidebar.list_of_statements')}}</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
				<!-- row -->
                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{trans('doctor/sidebar.date')}}</th>
                                                <th>{{trans('doctor/sidebar.name')}}</th>
                                                <th>{{trans('doctor/sidebar.patient_name')}}</th>
                                                <th>{{trans('doctor/sidebar.price')}}</th>
                                                <th>{{trans('doctor/sidebar.discount')}}</th>
                                                <th>{{trans('doctor/sidebar.tax_rate')}}</th>
                                                <th>{{trans('doctor/sidebar.tax')}}</th>
                                                <th>{{trans('doctor/sidebar.total_with_tax')}}</th>
                                                <th>{{trans('doctor/sidebar.type')}}</th>
                                                <th>{{trans('doctor/sidebar.operation')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($invoices as $invoice)
                                               <tr>
                                                   <td>{{ $loop->iteration}}</td>
                                                   <td>{{ $invoice->invoice_date }}</td>
                                                   @if (App::getLocale() == 'ar')
                                                   <td>{{ $invoice->Service->name ?? $invoice->Group->name }}</td>
                                                   @else
                                                   <td>{{ $invoice->Service->name_en ?? $invoice->Group->name_en }}</td>
                                                   @endif
                                                   <td><a href="{{route('patient_details',$invoice->patient_id)}}">{{ $invoice->Patient->name }}</a></td>
                                                   <td>{{ number_format($invoice->price, 2) }}</td>
                                                   <td>{{ number_format($invoice->discount_value, 2) }}</td>
                                                   <td>{{ $invoice->tax_rate }}%</td>
                                                   <td>{{ number_format($invoice->tax_value, 2) }}</td>
                                                   <td>{{ number_format($invoice->total_with_tax, 2) }}</td>
                                                   @if (App::getLocale() == 'ar')
                                                   <td>
                                                      @if($invoice->invoice_status == 1)
                                                           <span class="badge badge-danger">تحت الاجراء</span>
                                                      @elseif($invoice->invoice_status == 2)
                                                           <span class="badge badge-warning">مراجعة</span>
                                                       @else
                                                          <span class="badge badge-success">مكتملة</span>
                                                       @endif
                                                   </td>
                                                   @else
                                                   <td>
                                                    @if($invoice->invoice_status == 1)
                                                         <span class="badge badge-danger">under process</span>
                                                    @elseif($invoice->invoice_status == 2)
                                                         <span class="badge badge-warning">reviewed</span>
                                                     @else
                                                        <span class="badge badge-success">completed</span>
                                                     @endif
                                                    </td>
                                                    @endif
                                                   <td>
                                                       <div class="dropdown">
                                                           <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown" type="button">{{trans('doctors.Processes')}}<i class="fas fa-caret-down mr-1"></i></button>
                                                           <div class="dropdown-menu tx-13">
                                                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_diagnosis{{$invoice->id}}"><i class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;{{trans('doctor/sidebar.diagnosis')}} </a>
                                                               <a class="dropdown-item" href="#"  data-toggle="modal"  data-target="#add_review{{$invoice->id}}"><i class="text-warning far fa-file-alt"></i>&nbsp;&nbsp;{{trans('doctor/sidebar.review')}} </a>
                                                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#xray_conversion{{$invoice->id}}"><i class="text-primary fas fa-x-ray"></i>&nbsp;&nbsp;{{trans('doctor/sidebar.to_x_ray')}} </a>
                                                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#laboratorie_conversion{{$invoice->id}}"><i class="text-warning fas fa-syringe"></i>&nbsp;&nbsp;{{trans('doctor/sidebar.to_laboratory')}}  </a>

                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               @include('Dashboard.Doctor.invoices.add_diagnosis')
                                               @include('Dashboard.doctor.invoices.add_review')
                                               @include('Dashboard.Doctor.invoices.xray_conversion')
                                               @include('Dashboard.Doctor.invoices.Laboratorie_conversion')


                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    <!-- /row -->
				</div>
				<!-- row closed -->

			<!-- Container closed -->

		<!-- main-content closed -->
@endsection
@section('js')



    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('dashboard/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('dashboard/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('dashboard/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('dashboard/js/form-elements.js')}}"></script>


    <script>
        $('#review_date').datetimepicker({

        })
    </script>

@endsection
