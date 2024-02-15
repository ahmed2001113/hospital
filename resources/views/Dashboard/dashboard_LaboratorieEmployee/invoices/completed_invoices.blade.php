@extends('Dashboard.layouts.master')
@section('title')
{{trans('x_ray_emp/index.completed_invoice')}}
@stop
@section('css')
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
<!--  Owl-carousel css-->
<link href="{{URL::asset('Dashboard/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('Dashboard/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('x_ray_emp/index.completed_invoice')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('x_ray_emp/index.invoicess')}}</span>
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
                                <th>{{trans('x_ray_emp/index.date')}}</th>
                                <th>{{trans('x_ray_emp/index.patient_name')}}</th>
                                <th>{{trans('x_ray_emp/index.doctor_name')}}</th>
                                <th>{{trans('x_ray_emp/index.notes')}}</th>
                                <th>{{trans('x_ray_emp/index.invoice_status')}}</th>
                                <th>{{trans('x_ray_emp/index.operations')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $invoice->created_at }}</td>
                                    <td><a href="{{route('view_laboratories',$invoice->id)}}">{{ $invoice->Patient->name }}</a></td>
                                    <td>{{ $invoice->doctor->name }}</td>
                                    <td>{{ $invoice->description }}</td>
                                    @if (App::getLocale() == 'ar')
                                    <td>
                                        @if($invoice->case == 0)
                                            <span class="badge badge-danger">تحت الاجراء</span>
                                        @else
                                            <span class="badge badge-success">مكتملة</span>
                                        @endif
                                    </td>
                                    @else
                                    <td>
                                        @if($invoice->case == 0)
                                            <span class="badge badge-danger">Under Process</span>
                                        @else
                                            <span class="badge badge-success">Completed</span>
                                        @endif
                                    </td>
                                    @endif
                                    <td>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown" type="button">{{trans('doctors.Processes')}}<i class="fas fa-caret-down mr-1"></i></button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{route('invoices_laboratorie_employee.edit',$invoice->id)}}"><i class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;{{trans('x_ray_emp/index.diagnosis')}} </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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

@endsection
