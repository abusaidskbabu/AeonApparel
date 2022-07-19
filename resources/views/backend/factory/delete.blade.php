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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/factory" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Remove Factory ?</h6>
                </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
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

                                <div class="col-md-2"><strong>Machineries:</strong></div>
                                <div class="col-md-4">
                                    @foreach(explode(",",$data->machineries) as $key => $value) 
                                        <span class="badge badge-success p-1">{{ $value }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2"><strong>Workers:</strong></div>
                                <div class="col-md-10">
                                    @foreach(explode(",",$data->workers) as $key => $value) 
                                        @if($value != '')
                                            <a href="{{asset('backend/factories/'.$value)}}" target="_blank">
                                                <img src="{{asset('backend/factories/'.$value)}}" height="150" width="150" class="mb-1">
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
                                            <a href="{{asset('backend/factories/'.$value)}}" target="_blank">
                                                <img src="{{asset('backend/factories/'.$value)}}" height="150" width="150" class="mb-1">
                                            </a>  
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="/dashboard/factory" class="btn btn-primary btn-sm">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection