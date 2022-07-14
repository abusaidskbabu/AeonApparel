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
        <div class="col-md-9">
            <div  class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/blogs" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Remove Blog ?</h6>
                </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4"><strong>Title:</strong></div>
                                <div class="col-md-8">{{$data->title}}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Author:</strong></div>
                                <div class="col-md-8">{{$data->author}}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Image:</strong></div>
                                <div class="col-md-8">
                                    @if ($data->image == "")
                                        <span>Not Available</span>
                                    @else
                                      <img src="{{asset($data->image)}}" alt="{{$data->title}}" height="60" width="60">  
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Content:</strong></div>
                                <div class="col-md-8">{!! $data->content !!}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Date:</strong></div>
                                <div class="col-md-8">{{$data->date}}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Status:</strong></div>
                                <div class="col-md-8">
                                    @if ($data->status == 1)
                                    <span>Enabled</span>
                                    @else
                                    <span>Disabled</span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Action</h6>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button> &NonBreakingSpace;&NonBreakingSpace;
                            <a href="/dashboard/servicesinformation" class="btn btn-primary btn-sm">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
@endsection