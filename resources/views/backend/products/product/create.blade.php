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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('products.index')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Create Product</h6>
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
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="row">
                                <div class="col-md-4"><strong>Division:</strong></div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm" name="division">
                                        <option value="null">----Select Division----</option>
                                        @foreach ($division as $div)
                                        <option value="{{$div->id}}">{{$div->division_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <hr> --}}

                            <div class="row">
                                <div class="col-md-4"><strong>Category:</strong></div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm" name="parent_category" id="parent_category" required="">
                                        <option value="null">----Select Category----</option>
                                        @foreach ($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4"><strong>Sub-Category:</strong></div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm" name="sub_category" id="sub_category" required="">
                                        <option value="null">----Select Sub-Category----</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="row">
                                <div class="col-md-4"><strong>Gender:</strong></div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm" name="gender">
                                        <option value="null">----Select Gender----</option>
                                        @foreach ($gender as $gen)
                                        <option value="{{$gen->id}}">{{$gen->gender_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr> --}}
                            <div class="row">
                                <div class="col-md-4"><strong>Image:</strong></div>
                                <div class="col-md-4">
                                    <strong>Front:</strong>
                                    <input type="file" id="file-ip-1" name="image_front" accept="image/*" onchange="showPreview1(event);">
                                    <small class="form-text text-muted">Front Image Dimension Should Be Same as Back Image</small>
                                    <div class="preview">
                                        <img id="file-ip-1-preview" height="100" width="100" border="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <strong>Back:</strong>
                                    <input type="file" id="file-ip-1" name="image_back" accept="image/*" onchange="showPreview2(event);">
                                    <small class="form-text text-muted">Back Image Dimension Should Be Same as Front Image</small>
                                    <div class="preview">
                                        <img id="file-ip-2-preview" height="100" width="100" border="0">
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Colors:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm"
                                           name="color" value="{{old('color')}}" placeholder="Ex: Black, White">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Sizes:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm"
                                           name="size" value="{{old('size')}}" placeholder="Ex: XL, L, 34">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Description:</strong></div>
                                <div class="col-md-8">
                                    <textarea name="desc" class="form-control form-control-sm" id="desc" cols="50" rows="16">{{ old('desc') }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Status:</strong></div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm" name="status">
                                        <option value="null">----Select Status----</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Create</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="{{route('products.index')}}" class="btn btn-primary btn-sm">Cancel</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function showPreview1(event){
      if(event.target.files.length > 0){

        var src1 = URL.createObjectURL(event.target.files[0]);

        var preview1 = document.getElementById("file-ip-1-preview");

        preview1.src = src1;

        preview1.style.display = "block";
      }
    }

    $("#parent_category").change(function(){
        var parent_category = $(this).val();
        if(parent_category) {
            $.ajax({
                url: "{{  url('/dashboard/get/subcategory/') }}/"+parent_category,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    var d =$('select[name="sub_category"]').empty();
                    $.each(data, function(key, value){
                       $('select[name="sub_category"]').append('<option value="'+ value.id +'">' + value.category_name + '</option>');
                    });
                },
            });
        }else {
            alert('danger');
        }
    });

    function showPreview2(event){
        if(event.target.files.length > 0){

            var src2 = URL.createObjectURL(event.target.files[0]);

            var preview2 = document.getElementById("file-ip-2-preview");

            preview2.src = src2;

            preview2.style.display = "block";
        }
    }

tinymce.init({
      selector: 'textarea',
      plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		"save table contextmenu directionality emoticons template paste textcolor"
	],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | sizeselect | fontselect |  fontsizeselect",
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

    /* style */
	style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"}
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"}
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
		{title: "Alignment", items: [
			{title: "Left", icon: "alignleft", format: "alignleft"},
			{title: "Center", icon: "aligncenter", format: "aligncenter"},
			{title: "Right", icon: "alignright", format: "alignright"},
			{title: "Justify", icon: "alignjustify", format: "alignjustify"}
		]}
	]
    });
</script>
@endsection
