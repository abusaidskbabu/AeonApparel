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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Change Password</h6>
                </div>
                    <div class="card-body">
                        <form method="POST"  enctype="multipart/form-data">
                            @csrf
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times</button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li style="color:red;">{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif

                            @if(session()->has('message'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times</button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times</button>
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-4"><strong>Current Password:</strong></div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control form-control-sm" name="current_password" value="{{old('current_password')}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>New Password:</strong></div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control form-control-sm" name="password">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Re-Enter New Password:</strong></div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control form-control-sm" name="password_confirmation">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Update</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="/dashboard" class="btn btn-primary btn-sm">Cancel</a>
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