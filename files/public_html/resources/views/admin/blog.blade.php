@extends('layout.main-template')

@section('content')

<title>{{ $title }}</title>

<div class="row">
  <div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
      <h4 class="mb-sm-0"></h4>
      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="javascript: void(0);">Admin</a>
          </li>
          <li class="breadcrumb-item active"></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 ">
    <div class="card">
      <div class="card-body">
        <div class="live-preview">

          @if($edit_blog)
          <form action="{{route('update_Blog')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1">News Edit</h4>
              </div>
            </div>
            @else
            <form action="{{url('addBlog')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1">News Add</h4>
                </div>
              </div>
              @endif
              @csrf
              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-lg-10">
                  <label>Title <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_blog ? $edit_blog->id : ''}}">
                  <input type="text" class="form-control" id="title" name="title" value="{{old('title',$edit_blog ? $edit_blog->title : ''  )}}" placeholder="Enter title">
                  <span style="color:red">@error('title'){{ $message}} @enderror</span>
                </div>


                <div class="col-lg-10">
                  <label>Sub Title <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{old('sub_title',$edit_blog ? $edit_blog->sub_title : '' )}}" placeholder="Enter sub title">
                  <span style="color:red">@error('sub_title'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label>Category <span class="text-danger">*</span></label>
                  @if($edit_blog)
                  <select class="form-select mb-3" aria-label="Default select example" name="category" id="category" >
                    <option value="">Select category</option>
                    @foreach($category as $key => $cat)
                    <option value="{{$cat->id}} " {{$edit_blog->category == $cat->id ? 'selected' :  ' ' }} >{{$cat->name}}</option>
                    @endforeach
                  </select>
                  @else
                  <select class="form-select mb-3" aria-label="Default select example" name="category" id="category">
                    <option value="">Select category</option>
                    @foreach($category as $key => $cat)
                    <option value="{{$cat->id}}" @if (old('category') == $cat->id) {{ 'selected' }} @endif> {{$cat->name}}</option>
                    @endforeach
                  </select>
                  @endif
                  <span style="color:red">@error('category'){{ $message}} @enderror</span>
                </div>
                <div class="col-lg-10">
                  <label>Description <span class="text-danger">*</span></label>
                  <textarea class="form-control" type="text" id="description" name="description" value="{{old('description' )}}">{{old('description')}}{{$edit_blog ? $edit_blog->description : ''}}</textarea>
                  <div id="editorError" class="error-message" style="color:red"></div>
                  <span style="color:red">@error('description'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label for="file">Upload Image <span class="text-danger">*</span></label>
                  @if($edit_blog)
                  <input type="file" class="form-control " id="imageS" name="imageS" value="{{old('imageS')}}" accept="image/png, image/jpeg,image/jpg">
                  <img src="{{url('uploadsNews').'/'.($edit_blog ? $edit_blog->image :' ' ) }}" id="image-preview" style="height:30px;width:30px;">
                  @else
                  <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg,image/jpg" value="{{old('image')}}" >
                  <img src="{{url('user.png')}}" style="height:30px;width:38px;" id="preview-image-before-upload">
                  @endif
                  <span style="color:red">@error('image'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label>Meta Key <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="meta_key" name="meta_key" value="{{old('meta_key',$edit_blog ? $edit_blog->meta_key : '')}}"></input>
                  <span style="color:red">@error('meta_key'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label>Meta Description <span class="text-danger">*</span></label>
                  <textarea class="form-control" type="text" id="meta_description" name="meta_description" value="{{old('meta_description',$edit_blog ? $edit_blog->meta_description : '')}}">{{old('meta_description')}}{{$edit_blog ? $edit_blog->meta_description : ''}}</textarea>
                  <span style="color:red">@error('meta_description'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label>Meta Title <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="meta_title" name="meta_title" value="{{old('meta_title',$edit_blog ? $edit_blog->meta_title : '')}}"></input>
                  <span style="color:red">@error('meta_title'){{ $message}} @enderror</span>
                </div>


              </div>


              <br>
              <div class="row g-3">
                <div class="col-md-4">
                  <button class="btn btn-primary" type="submit" id="myform">Submit</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


<style>
  .error {
    color: red;

  }
</style>

@section('external-js')

<script>
  $(document).ready(function($) {
    CKEDITOR.replace('description');
    function validateEditorContent() {
      var editorContent = CKEDITOR.instances.description.getData();

      if (editorContent.trim() === '') {
        $('#editorError').text('Description required');
        return false;
      }
      $('#editorError').text('')
      return true;
    }


    $('#form1').submit(function(event) {
      if (!validateEditorContent()) {
        event.preventDefault();
      }
    });

    $("#form1").validate({
      rules: {
        title: "required",
        sub_title: "required",
        category: "required",
        image: "required",
        meta_key: "required",
        meta_description: "required",
        meta_title: "required",



      },
      messages: {
        title: "Please enter title",
        sub_title: "Please enter sub title",
        category: "Please select category",
        image: "Please select image",
        meta_key: "Please enter meta key",
        meta_description: "Please enter meta description",
        meta_title: "Please enter meta title",

      },

      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo(element.parents('.form-group'));
        } else { // This is the default behavior 
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        form.submit();
      }

    });
  });
$('input').keypress(function(e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
  });
  $('textarea').keypress(function(e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
  });
  $('#imageS').change(function() {
    // $("#image-preview").attr('src',"")
    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#image-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

  });
  $('#image').change(function() {

    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#preview-image-before-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

  });
  $('input[type="file"]').change(function() {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
      case 'jpg':
      case 'jpeg':
      case 'png':
      case 'gif':
        break;
      default:
        alert('This is not an allowed file type.');
        this.value = '';
    }
  });
</script>
@endsection