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
        <div class="col-md-11">
            <div  class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/factory" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Create Factory</h6>
                </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
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
                                <div class="col-md-4"><strong>Name:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="title" value="{{old('title')}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Location:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="location" value="{{old('location')}}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Banner:</strong></div>
                                <div class="col-md-8">
                                    <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
                                    <small class="form-text text-muted">Image Dimension Should Be 1200*300 squared for box view</small>
                                    <div class="preview">
                                        <img id="file-ip-1-preview" height="100" width="100" border="0">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Machineries:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="machineries" value="{{old('machineries')}}" placeholder="eg: machineries1,machineries2,">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Workers:</strong></div>
                                <div class="col-md-8">
                                    <input type="file" id="file-ip-1" name="workers[]" multiple>
                                    <small class="form-text text-muted">Workers's picture</small>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Gallery:</strong></div>
                                <div class="col-md-8">
                                    <input type="file" id="file-ip-1" name="gallery[]" multiple>
                                    <small class="form-text text-muted">Gallery photos</small>

                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Create</button> &NonBreakingSpace;&NonBreakingSpace;
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
