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
            <div class="col-md-9">
                <div  class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('sliders.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Create Slider</h6>
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

                            <hr>
                            <div class="row mb-2">
                                <div class="col-md-4"><strong>Heading:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" name="heading" id="heading" class="form-control"  placeholder="eg: Women Textile">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4"><strong>Yeay 1st:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" name="year_1st" id="year_1st" class="form-control"  placeholder="eg: 2k">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4"><strong>Year 2nd:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" name="year_2nd" id="year_2nd" class="form-control" placeholder="eg: 21">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4"><strong>Span-text:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" name="span_text" id="span_text" class="form-control"  placeholder="eg: Summer Collection">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Image:</strong></div>
                                <div class="col-md-8">
                                    <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
                                    <small class="form-text text-muted">Image Dimension Should Be 1800*700 or 2:1 for perfect view</small>
                                    <div class="preview">
                                        <img id="file-ip-1-preview" height="100" width="100" border="0">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Create</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="{{route('sliders.index')}}" class="btn btn-primary btn-sm">Cancel</a>
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
