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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/leadtime" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Lead Time Details</h6>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"><strong>Title:</strong></div>
                            <div class="col-md-6">{{$data->title}}</div>
                        </div>
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-2"><strong>Location:</strong></div>
                            <div class="col-md-10">
                                {!! $data->details !!}
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