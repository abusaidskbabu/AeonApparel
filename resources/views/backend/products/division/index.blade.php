@extends('backend.base')
@section('css')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('division.create')}}" type="button" class="btn btn-primary"><i class="fas fa-plus-square"></i> Create New</a>
            </div>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times</button>
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div  class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product Division</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead align="center">
                                <tr>
                                  <th>#</th>
                                  <th>Division Name</th>
                                  <th>Thumbnail</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody align="center">
                                  @foreach ($data as $dt)
                                      <tr>
                                         <td>{{$dt->id}}</td>
                                         <td>{{$dt->division_name}}</td>
                                         @if ($dt->image == null)
                                             <td>N/A</td>
                                         @else
                                         <td><a href="{{asset($dt->image)}}" target="_blank"><img src="{{asset($dt->image)}}" alt="{{asset($dt->image)}}" height="70" width="70"></a></td>
                                         @endif
                                         <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('division.edit', $dt->id)}}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{route('division.delete', $dt->id)}}">Delete</a>
                                                </div>
                                            </div>
                                         </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@section('js')
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script>
    $(document).ready(function() {
  $('#dataTable').DataTable();
});
</script>
@endsection
@endsection
