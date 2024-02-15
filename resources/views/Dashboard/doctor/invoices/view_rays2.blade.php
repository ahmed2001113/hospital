@extends('Dashboard.layouts.master')
@section('title')
{{trans("Dashboard/labEmployee.21")}}
@stop
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans("Dashboard/labEmployee.21")}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$lab->Patient->name}}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    <div class="form-group">
        <label for="exampleFormControlTextarea1">{{trans("Dashboard/labEmployee.22")}}</label>
        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{$lab->description_employee}}</textarea>
    </div>

    <!-- Gallery -->
    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row row-sm pr-0">

            @foreach($lab->images as $image)

                <li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('Dashboard/img/laboratories/'.$image->filename)}}" data-src="{{URL::asset('Dashboard/img/Rays/'.$image->filename)}}">
                    <a href="#">
                        <img width="50px" height="350px" class="img-responsive" src="{{URL::asset('Dashboard/img/laboratories/'.$image->filename)}}" alt="NoImg">
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- /Gallery -->

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

@endsection
@section('js')


@endsection