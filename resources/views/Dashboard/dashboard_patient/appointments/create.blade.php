@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
{{trans('Dashboard/appointments.1')}}
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{trans('Dashboard/appointments.1')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('Dashboard/main-sidebar_trans.6')}}</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row -->
<div class="row">
    <div class="col-12">
        @if(session()->has('error'))
            <div class="alert alert-danger text-center">{{session()->get('error')}}</div>
        @endif
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('appointments.store')}}" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label>{{trans('appointment.3')}}</label>
                            <input type="text" name="name"  value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" required>
                        </div>
                        <div class="col-6">
                            <label>{{trans('appointment.5')}}</label>
                            <select name="doctor" class="form-control @error('doctor') is-invalid @enderror">
                                @if(App::getLocale() == 'ar')
                                @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$doctor->section->name}}</option>
                                @endforeach
                                @else
                                @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$doctor->section->name_en}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div><br>
                        <div class="row">
                        <div class="col-6">
                            <label>{{trans('appointment.9')}}</label>
                            <input type="date" name="appointment_patient"  value="{{old('appointment_patient')}}" class="form-control @error('appointment_patient') is-invalid @enderror" required>
                        </div>
                        <div class="col-6">
                            <label>{{trans('appointment.10')}}</label>
                            <input type="text" name="notes"  value="{{old('notes')}}" class="form-control @error('notes') is-invalid @enderror">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">{{trans('ambulance.save')}}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
