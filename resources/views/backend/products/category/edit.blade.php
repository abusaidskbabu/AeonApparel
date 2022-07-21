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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('category.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Edit Product Category</h6>
                </div>
                    <div class="card-body">
                        <form method="POST" >
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
                                <div class="col-md-4"><strong>Category Name:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="category_name" value="{{$data->category_name}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Parent Category:</strong></div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm" name="parent_id" value="{{old('parent_id')}}">
                                        <option value="">Select</option>
                                        @foreach(\App\product_category::all() as $row)
                                            <option value="{{$row->id}}" @if($data->parent_id == $row->id) selected="" @endif>{{ $row->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Update</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="{{route('category.index')}}" class="btn btn-primary btn-sm">Cancel</a>
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
