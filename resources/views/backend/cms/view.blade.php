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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/pagecms" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> {{$data->title}} Page Details</h6>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"><strong>Title:</strong></div>
                            <div class="col-md-8">{{$data->title}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Url:</strong></div>
                            <div class="col-md-8">/{{$data->slug}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Content:</strong></div>
                            <div class="col-md-8">
                                {!! $data->content !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4"><strong>Content:</strong></div>
                            <div class="col-md-8">
                                {!! $data->why_chose_us !!}
                            </div>
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