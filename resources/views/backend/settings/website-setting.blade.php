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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Website Setting</h6>
                </div>
                @php 
                	$data = DB::table('website_setting')->orderBy('id','DESC')->first();
                @endphp
                    <div class="card-body">
                        <form method="POST"  enctype="multipart/form-data" action="{{ route('website.settings.store') }}">
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
                                <div class="col-md-4"><strong>Name:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{ $data->name ?? '' }}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Website Logo:</strong></div>
                                <div class="col-md-8">
                                    <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
                                    <small class="form-text text-muted">Image Dimension Should Be 900*450</small>
                                    <div class="preview">
                                        <img id="file-ip-1-preview" src="{{asset($data->logo ?? '')}}" height="60" width="60">
                                        <input type="hidden" name="prev_img" value="{{$data->logo ?? ''}}">
                                    </div>                             
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Phone:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="phone" value="{{ $data->phone ?? '' }}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Email:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="email" value="{{ $data->email ?? '' }}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Address:</strong></div>
                                <div class="col-md-8">
                                	<textarea class="form-control form-control-sm" name="address">{{ $data->address ?? '' }}</textarea>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Facebook Link:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="facebook" value="{{ $data->facebook ?? '' }}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Linked In Link:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="linkedin" value="{{ $data->linkedin ?? '' }}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Twitter Link:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="twiter" value="{{ $data->twiter ?? '' }}">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Instagram Link:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="instagram" value="{{ $data->instagram ?? '' }}">
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
<script src="{{asset('backend/js/tinymce/tinymce.min.js')}}"></script>
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