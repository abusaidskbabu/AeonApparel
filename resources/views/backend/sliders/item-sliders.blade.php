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
                <a href="{{route('item-sliders.create')}}" type="button" class="btn btn-primary"><i class="fas fa-plus-square"></i> Create New</a>
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
                    <h6 class="m-0 font-weight-bold text-primary">Available Item Sliders</h6>
                </div>
                <div class="card-body row">

                    @forelse($item_sliders as $slider)

                        <i class="fa fa-remove"></i>
                            <div class="col-md-4">
                                <div class="thumbnail" style="display: flex">
                                    <img class="img-fluid img-thumbnail" src="{{ asset($slider->image) }}" alt="Lights">
                                    <a onclick="return confirm('Are you sure?')" href="{{ route('item.sliders.delete', $slider->id) }}">
                                        <span class="fa fa-times"></span>
                                    </a>
                                </div>
                            </div>
                    @empty
                    @endforelse

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
