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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('products.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Product Details</h6>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"><strong>Name:</strong></div>
                            <div class="col-md-6">{{$data->name}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Division:</strong></div>
                            <div class="col-md-6">{{$data->division_name}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Category:</strong></div>
                            <div class="col-md-6">{{$data->category_name}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Gender:</strong></div>
                            <div class="col-md-6">{{$data->gender_name}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Image:</strong></div>
                            <div class="col-md-3">
                                @if ($data->image_front == "")
                                    <strong>Back:</strong>
                                    <span>Not Available</span>
                                @else
                                    <strong>Front:</strong>
                                <a href="{{asset($data->image_front)}}" target="_blank">
                                  <img src="{{asset($data->image_front)}}" alt="{{$data->name}}" height="100" width="100">
                                </a>
                                @endif
                            </div>
                            <div class="col-md-3">
                                @if ($data->image_back == "")
                                    <strong>Back:</strong>
                                    <span>Not Available</span>
                                @else
                                    <strong>Back:</strong>
                                    <a href="{{asset($data->image_back)}}" target="_blank">
                                        <img src="{{asset($data->image_back)}}" alt="{{$data->name}}" height="100" width="100">
                                    </a>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Colors:</strong></div>
                            <div class="col-md-6">{{$data->color}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Sizes:</strong></div>
                            <div class="col-md-6">{{$data->size}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"><strong>Description:</strong></div>
                            <div class="col-md-6">
                                {!! $data->description !!}
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
