@extends('backend.base')
@section('css')
<style>
    .form-input input {
  display:none;
}
.form-input img {
  display:none;
  margin-top:10px;
}
</style>
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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/teammembers" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Team Member Edit</h6>
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
                            <div class="row">
                                <div class="col-md-6"><strong>Name:</strong></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{$data->name}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Designation:</strong></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="designation" value="{{$data->designation}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Image:</strong></div>
                                <div class="col-md-6">
                                    <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
                                    <small class="form-text text-muted">Image Dimension Should Be 600*600 or squared for box view</small>
                                    <div class="preview">
                                        <img id="file-ip-1-preview" src="{{asset($data->image)}}" height="60" width="60">
                                        <input type="hidden" name="prev_img" value="{{$data->image}}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>LinkedIn:</strong></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="linkedin" value="{{$data->linkedin}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Facebook:</strong></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="facebook" value="{{$data->facebook}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Sort Number:</strong></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-sm" name="sort_number" value="{{$data->sort_number}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6"><strong>Status:</strong></div>
                                <div class="col-md-6">
                                    @if ($data->status == 1)
                                    <select class="form-control form-control-sm" name="state">
                                        <option value="null">----Select State----</option>
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @else
                                    <select class="form-control form-control-sm" name="state">
                                        <option value="null">----Select State----</option>
                                        <option value="1">Active</option>
                                        <option value="0" selected>Inactive</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Update</button> &NonBreakingSpace;&NonBreakingSpace;
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
<script>
    function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>
@endsection
