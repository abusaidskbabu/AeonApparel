@extends('backend.base')
@section('css')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/teammembers" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Remove Team Member ?</h6>
                </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6"><strong>Id:</strong></div>
                                <div class="col-md-6">{{$data->id}}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Name:</strong></div>
                                <div class="col-md-6">{{$data->name}}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Designation:</strong></div>
                                <div class="col-md-6">{{$data->designation}}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Image:</strong></div>
                                <div class="col-md-6">
                                    @if ($data->image == "")
                                        <span>Not Available</span>
                                    @else
                                      <img src="{{asset($data->image)}}" alt="{{$data->name}}" height="60" width="60">  
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>LinkedIn:</strong></div>
                                <div class="col-md-6">
                                    @if ($data->linkedin == null)
                                        <span>Not Available</span>
                                    @else
                                    {{$data->linkedin}}
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Facebook:</strong></div>
                                <div class="col-md-6">
                                    @if ($data->facebook == null)
                                        <span>Not Available</span>
                                    @else
                                    {{$data->facebook}}
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Sort Number:</strong></div>
                                <div class="col-md-6">{{$data->sort_number}}</div>
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
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="/dashboard/teammembers" class="btn btn-primary">Cancel</a>
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