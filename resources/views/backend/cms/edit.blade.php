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
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/dashboard/pagecms" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></a> Edit {{$data->title}} Page</h6>
                </div>
                    <div class="card-body">
                        <form method="POST">
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
                                <div class="col-md-4"><strong>Url:</strong></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" name="slug" value="/{{$data->slug}}" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Content:</strong></div>
                                <div class="col-md-8">
                                    <textarea name="content" class="form-control form-control-sm" id="content" cols="50" rows="16">{{ $data->content }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4"><strong>Why Choose Us:</strong></div>
                                <div class="col-md-8">
                                    <textarea name="why_chose_us" class="form-control form-control-sm" id="why_chose_us" cols="50" rows="16">{{ $data->why_chose_us }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-success btn-sm">Update</button> &NonBreakingSpace;&NonBreakingSpace;
                                <a href="/dashboard/pagecms" class="btn btn-primary btn-sm">Cancel</a>
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
tinymce.init({
      selector: 'textarea',
      theme: "modern",
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