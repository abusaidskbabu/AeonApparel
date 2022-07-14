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
                        <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('item.sliders.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Create Slider</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('review.store') }}" enctype="multipart/form-data">
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
                                <div class="col-md-4"><strong>Client Name:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" name="client" class="form-control" required="" placeholder="Jhone Doe">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4"><strong>Review:</strong></div>
                                <div class="col-md-8">
                                    <textarea name="review" class="form-control" required="" placeholder="Thanks so much!!"></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Create</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="{{route('review.index')}}" class="btn btn-primary btn-sm">Cancel</a>
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
