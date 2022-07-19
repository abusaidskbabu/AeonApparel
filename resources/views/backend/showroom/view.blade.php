@extends('backend.base')
@section('body')
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    @include('backend.topnav')

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div  class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/showroom" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Showroom Details</h6>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"><strong>Title:</strong></div>
                            <div class="col-md-6">{{$data->title}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><strong>Image:</strong></div>
                            <div class="col-md-10">
                                @if ($data->banner == "")
                                    <span>Not Available</span>
                                @else
                                <a href="{{asset($data->banner)}}" target="_blank">
                                    <img src="{{asset($data->banner)}}" alt="{{$data->title}}" height="100" width="100%">
                                </a>  
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><strong>Location:</strong></div>
                            <div class="col-md-4">
                                <a href="{{$data->location}}" target="_blank" class="text-success"><i class="fas fa-map-marker-alt"></i> {{$data->location}}</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><strong>Picture:</strong></div>
                            <div class="col-md-10">
                                @foreach(explode(",",$data->workers) as $key => $value) 
                                    @if($value != '')
                                        <a href="{{asset('backend/showrooms/'.$value)}}" target="_blank">
                                            <img src="{{asset('backend/showrooms/'.$value)}}" height="150" width="150" class="mb-1">
                                        </a>  
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><strong>Gallery:</strong></div>
                            <div class="col-md-10">
                                @foreach(explode(",",$data->gallery) as $key => $value) 
                                    @if($value != '')
                                        <a href="{{asset('backend/showrooms/'.$value)}}" target="_blank">
                                            <img src="{{asset('backend/showrooms/'.$value)}}" height="150" width="150" class="mb-1">
                                        </a>  
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection