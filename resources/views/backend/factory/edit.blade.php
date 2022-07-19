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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/factory" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Edit Client</h6>
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
                                <div class="col-md-4"><strong>Title:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="title" value="{{$data->title}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Location:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="location" value="{{$data->location}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Banner:</strong></div>
                                <div class="col-md-8">
                                    <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
                                    <small class="form-text text-muted">Image Dimension Should Be 1200*300 or squared for box view</small>
                                    <div class="preview">
                                        <img id="file-ip-1-preview" src="{{asset($data->banner)}}" height="60" width="60">
                                        <input type="hidden" name="prev_img" value="{{$data->banner}}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Machineries:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="machineries" value="{{$data->machineries}}" placeholder="eg: machineries1,machineries2,">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2"><strong>Workers:</strong></div>
                                <div class="col-md-10">
                                    <input type="file" id="file-ip-1" name="workers[]" accept="image/*" multiple>
                                    <small class="form-text text-muted">Workers's picture</small>
                                    <div class="row">
                                        @foreach(explode(",",$data->workers) as $key => $value) 
                                            @if($value != '')
                                                <div class="col-md-2">
                                                    <a href="{{asset('backend/factories/'.$value)}}" target="_blank" class="">
                                                        <img src="{{asset('backend/factories/'.$value)}}" height="150" width="150" class="mb-1 p-1">
                                                    </a>  
                                                    <a href="{{ route('factory.worker.delete', ['id'=>$data->id,'image'=>$value])}}" class="delete-image-btn text-danger"><i class="fas fa-times-circle"></i></a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2"><strong>Gallery:</strong></div>
                                <div class="col-md-10">
                                    <input type="file" id="file-ip-1" name="gallery[]" accept="image/*" multiple>
                                    <small class="form-text text-muted">Gallery photos</small>
                                    <div class="row">
                                        @foreach(explode(",",$data->gallery) as $key => $value) 
                                            @if($value != '')
                                                <div class="col-md-2">
                                                    <a href="{{asset('backend/factories/'.$value)}}" target="_blank">
                                                        <img src="{{asset('backend/factories/'.$value)}}" height="150" width="150" class="mb-1 p-1">
                                                    </a>  
                                                    <a href="{{ route('factory.gallery.delete', ['id'=>$data->id,'image'=>$value])}}" class="delete-image-btn text-danger"><i class="fas fa-times-circle"></i></a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Update</button> &NonBreakingSpace;&NonBreakingSpace;
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
