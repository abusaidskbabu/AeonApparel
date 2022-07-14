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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/servicesinformation" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Service Details</h6>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"><strong>Title:</strong></div>
                            <div class="col-md-6">{{$data->title}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Icon:</strong></div>
                            <div class="col-md-6">
                                <i class="{{ $data->icon_2 }}"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Image:</strong></div>
                            <div class="col-md-6">
                                @if ($data->icon == "")
                                    <span>Not Available</span>
                                @else
                                <a href="{{asset($data->icon)}}" target="_blank">
                                  <img src="{{asset($data->icon)}}" alt="{{$data->title}}" height="60" width="60">  
                                </a>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Overview:</strong></div>
                            <div class="col-md-6">
                                {!! $data->overview !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Status:</strong></div>
                            <div class="col-md-6">
                                @if ($data->status == 1)
                                <span>Active</span>
                                @else
                                <span>Inactive</span>
                                @endif
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