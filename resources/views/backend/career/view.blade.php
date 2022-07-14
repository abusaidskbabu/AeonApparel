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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/career" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Career Details</h6>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"><strong>Date:</strong></div>
                            <div class="col-md-8">{{$data->created_at}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Firstname:</strong></div>
                            <div class="col-md-8">{{$data->firstname}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Lastname:</strong></div>
                            <div class="col-md-8">
                                {!! $data->lastname !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Email:</strong></div>
                            <div class="col-md-8">{{$data->email}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Phone Number:</strong></div>
                            <div class="col-md-8">{{$data->number}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Address:</strong></div>
                            <div class="col-md-8">{{$data->address}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Qualifications:</strong></div>
                            <div class="col-md-8">{{$data->qualifications}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Applied Position:</strong></div>
                            <div class="col-md-8">{{$data->position}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>CV:</strong></div>
                            <div class="col-md-8">
                                @if($data->cv != NULL)
                                    <a href="{{ asset($data->cv) }}">View</a>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Message:</strong></div>
                            <div class="col-md-8">{{$data->message}}</div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
