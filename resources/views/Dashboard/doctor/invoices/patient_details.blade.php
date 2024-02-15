@extends('Dashboard.layouts.master')
@section('css')
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
{{trans('doctor/sidebar.patient_information')}}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('doctor/sidebar.patient_information')}}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('doctor/sidebar.patient')}}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.messages_alert')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card" id="basic-alert">
                <div class="card-body">
                    <div class="text-wrap">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-1">
                                <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs main-nav-line">
                                            <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">{{trans('doctor/sidebar.patient_record')}}</a></li>
                                            <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">{{trans('doctor/sidebar.x_ray')}}</a></li>
                                            <li class="nav-item"><a href="#tab3" class="nav-link" data-toggle="tab">{{trans('doctor/sidebar.lab')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                    <div class="tab-content">


                                        {{-- Strat Show Information Patient --}}

                                        <div class="tab-pane active" id="tab1">
                                            <br>
                                            <div class="vtimeline">
                                                @foreach($patient_records as $patient_record)
                                                    <div class="timeline-wrapper {{ $loop->iteration % 2 == 0 ? 'timeline-inverted' : '' }} timeline-wrapper-primary">
                                                        <div class="timeline-badge"><i class="las la-check-circle"></i></div>
                                                        <div class="timeline-panel">
                                                            <div class="timeline-heading">
                                                                <h6 class="timeline-title">{{trans('doctor/sidebar.dopc')}}</h6>
                                                            </div>
                                                            <div class="timeline-body">
                                                                <p>{{$patient_record->diagnosis}}</p>
                                                            </div>
                                                            <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                                <i class="fas fa-user-md"></i>&nbsp;
                                                                <span>{{$patient_record->Doctor->name}}</span>
                                                                <span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>{{$patient_record->date}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        {{-- End Show Information Patient --}}



                                        {{-- Start Invices Patient --}}

                                        <div class="tab-pane" id="tab2">

                                            <div class="table-responsive">
                                                <table class="table table-hover text-md-nowrap text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{trans('doctor/sidebar.doctor_name')}}</th>
                                                        <th>{{trans('doctor/sidebar.emp_name')}}</th>
                                                        <th>{{trans('doctor/sidebar.dopc')}}</th>
                                                        <th>{{trans('doctor/sidebar.examination')}}</th>
                                                        <th>{{trans('doctor/sidebar.operation')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($patient_rays as $patient_ray)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$patient_ray->doctor->name}}</td>
                                                         <td>{{$patient_ray->employee->name ?? 'noEmployee'}}</td>
                                                         <td>{{$patient_ray->description}}</td>   
                                                         @if (App::getLocale() == 'ar')
                                                            @if($patient_ray->case == 0)
                                                                <td class="text-danger">غير مكتملة</td>
                                                            @else
                                                                <td class="text-success"> مكتملة</td>
                                                            @endif
                                                            @else
                                                            @if($patient_ray->case == 0)
                                                                <td class="text-danger">Under Process</td>
                                                            @else
                                                                <td class="text-success">Completed</td>
                                                            @endif

                                                            @endif

                                                            @if($patient_ray->doctor_id == auth()->user()->id)
                                                                @if($patient_ray->case == 0)
                                                                <td>
                                                                    <a class="modal-effect btn btn-sm btn-primary" data-effect="effect-scale"  data-toggle="modal" href="#edit_xray_conversion{{$patient_ray->id}}"><i class="fas fa-edit"></i></a>
                                                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#deleted{{$patient_ray->id}}"><i class="las la-trash"></i></a>
                                                                </td>

                                                                @else
                                                                    <td>
                                                                        <a class="modal-effect btn btn-sm btn-warning"  href="{{route('invoices.show',$patient_ray->id)}}"><i class="fas fa-binoculars"></i></a>
                                                                    </td>

                                                                @endif
                                                            @endif
                                                        </tr>
                                                        @include('Dashboard.doctor.invoices.edit_xray_conversion')
                                                        @include('Dashboard.doctor.invoices.deleted')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- End Invices Patient --}}



                                        {{-- Start Receipt Patient  --}}

                                        <div class="tab-pane" id="tab3">
                                            <div class="table-responsive">
                                                <table class="table table-hover text-md-nowrap text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{trans('doctor/sidebar.doctor_name')}}</th>
                                                        <th>{{trans('doctor/sidebar.lab_name')}}</th>                                                        <th>{{trans('doctor/sidebar.dopc')}}</th>
                                                        <th>{{trans('doctor/sidebar.examination')}}</th>
                                                        <th>{{trans('doctor/sidebar.operation')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($patient_Laboratories as $patient_Laboratorie)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$patient_Laboratorie->doctor->name}}</td>
                                                            <td>{{$patient_Laboratorie->employee->name ?? 'No Employee'}}</td>
                                                            
                                                            <td>{{$patient_Laboratorie->description}}</td>
                                                            @if (App::getLocale() == 'ar')
                                                            @if($patient_Laboratorie->case == 0)
                                                                <td class="text-danger">غير مكتملة</td>
                                                            @else
                                                                <td class="text-success"> مكتملة</td>
                                                            @endif
                                                            @else
                                                            @if($patient_ray->case == 0)
                                                                <td class="text-danger">Under Process</td>
                                                            @else
                                                                <td class="text-success">Completed</td>
                                                            @endif

                                                            @endif
                                                            @if($patient_Laboratorie->doctor_id == auth()->user()->id)
                                                            @if($patient_Laboratorie->case == 0)
                                                                <td>
                                                                    <a class="modal-effect btn btn-sm btn-primary" data-effect="effect-scale"  data-toggle="modal" href="#edit_laboratorie_conversion{{$patient_Laboratorie->id}}"><i class="fas fa-edit"></i></a>
                                                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#deleted_laboratorie{{$patient_Laboratorie->id}}"><i class="las la-trash"></i></a>
                                                                </td>
                                                                @else
                                                                <td>
                                                                    <a class="modal-effect btn btn-sm btn-warning"  href="{{route('show2',$patient_Laboratorie->id)}}"><i class="fas fa-binoculars"></i></a>
                                                                </td>
                                                            @endif
                                                            @endif
                                                        </tr>
                                                        @include('Dashboard.doctor.invoices.edit_laboratorie_conversion')
                                                        @include('Dashboard.doctor.invoices.deleted_laboratorie')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- End Receipt Patient  --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Prism Precode -->
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
@endsection
@section('js')
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
