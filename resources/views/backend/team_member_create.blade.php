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

    <!-- Page Heading -->
    <div class="align-items-center justify-content-between">
        <div class="row justify-content-between">
            <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/teammembers" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Create Team Member</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control form-control-sm" name="name" value="{{old('name')}}" placeholder="Enter Name">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control form-control-sm" name="designation" value="{{old('designation')}}" placeholder="Enter Designation">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="designation">Upload Image</label> <br>
                                <input type="file" id="file-ip-1" name="file" accept="image/*" onchange="showPreview(event);">
                                <small class="form-text text-muted">Image Dimension Should Be 600*600 or squared for box view</small>
                                <div class="preview">
                                    <img id="file-ip-1-preview" width="100" height="100" style="border: none">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>LinkedIn Profile</label>
                                <input type="text" class="form-control form-control-sm" name="linkedin" value="{{old('linkedin')}}" placeholder="LinkedIn Profile">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Facebook Profile</label>
                                <input type="text" class="form-control form-control-sm" name="facebook" value="{{old('facebook')}}" placeholder="Facebook Profile">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Sort Number</label>
                                <input type="text" class="form-control form-control-sm" name="sort_number" value="{{old('sort_number')}}" placeholder="Sort Number">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control form-control-sm" name="state">
                                    <option value="null">----Select Status----</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <hr>
                            <div class=" row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Create</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="/dashboard/teammembers" class="btn btn-danger btn-sm">Cancel</a>
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
