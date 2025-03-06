@extends('layout.main-template')
@section('content')
<title>{{ $title }}</title>
<style>
  .right {
    float: right;
  }
</style>
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
  @if($edit_amendment)
  <div class="col-md-12 ">
    <div class="card ">
      <div class="card-header">
        <a href="{{url('amendment')}}" class="btn btn-primary right">Add Amendment</a>
      </div>
    </div>
  </div>
  @else
  <div></div>
  @endif
  <div class="col-md-12 ">
    <div class="card">
      <div class="card-body">
        <div class="live-preview">


          @if($edit_amendment!='')
          <form action="{{url('updateAmendment')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1">Amendment Edit</h4>
              </div>
            </div>
            @else
            <form action="{{url('addAmendment')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1">Amendment Add</h4>
                </div>
              </div>
              @endif
              @csrf
              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-md-4">
                  <label>Name <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_amendment ? $edit_amendment->id : '' }}">
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name',$edit_amendment ? $edit_amendment->name : '' )}}" placeholder="Enter name">
                  <span style="color:red">@error('name'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-4">
                  <label>Designation <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="designation" name="designation" value="{{old('designation',$edit_amendment ? $edit_amendment->designation : '')}}" placeholder="Enter designation">
                  <span style="color:red">@error('name'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-4">
                  <label for="exampleInputdate" class="form-label">Appointment Date</label>
                  <input type="date" class="form-control" id="date" name="date" value="{{old('date',$edit_amendment ? $edit_amendment->date : '')}}">
                  <span style="color:red">@error('date'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label>Description </label>
                  <textarea class="form-control" type="text" id="description" name="description" value="{{old('description' )}}">{{old('description' )}}{{$edit_amendment ? $edit_amendment->description : ''}}</textarea>
                  <div id="editorError" class="error-message" style="color:red"></div>
                  <span style="color:red">@error('description'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-10">
                  <label for="file">Upload Image <span class="text-danger">*</span></label>
                  @if($edit_amendment)
                  <input type="file" class="form-control " id="imageS" name="imageS" value="{{old('image',$edit_amendment ? $edit_amendment->image : '')}}" accept="image/png, image/jpeg,image/jpg">
                  <img src="{{url('uploadsAmend/').'/'.($edit_amendment ? $edit_amendment->image :' ' ) }}" id="image-preview" style="height:30px;width:30px;">
                  @else
                  <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg,image/jpg" value="{{old('image')}}">
                  <img src="{{url('user.png')}}" style="height:30px;width:38px;" id="preview-image-before-upload">
                  @endif
                  <span style="color:red">@error('image'){{ $message}} @enderror</span>
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

<div class="row">
  <div class="col-md-12 ">
    <div class="card">
      <div class="card-body">
        <div class="live-preview">
          <div class="card">
            <div class="card-header align-items-center d-flex card-primary">
              <h4 class="card-title mb-0 flex-grow-1">Amendment List</h4>
            </div>
          </div>
        </div>

        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>

              <th>Sr no</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-sm" id="exampleModalSmall" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <input type="hidden" name="_method" value="DELETE">
      <div class="modal-body text-center">
        <form action="" method="post">
          @csrf

          <h5 class="mb-1">Are you sure you want to delete?</h5>
          <input type='hidden' name='data_id' id="del_id" />
      </div><!--end modal-body-->
      <div class="modal-footer">

        <!-- <a href="#" class="btn btn-soft-primary btn-sm" id="delete-id" >Delete</a> -->
        <a href="#" class="btn btn-soft-primary btn-sm" id="deleteId">Delete</a>
        <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div><!--end modal-footer-->
    </div><!--end modal-content-->
  </div><!--end modal-dialog-->
</div><!--end modal-->
@endsection


<style>
  .error {
    color: red;
  }
</style>

@section('external-js')

<script>
  function deleteData(id) {
    $('#exampleModalSmall').modal('show');
    $('#deleteId').attr("href", "deleteAmendment" + id)
  }
  $(document).ready(function($) {
    CKEDITOR.replace('description');

    function validateEditorContent() {
      var editorContent = CKEDITOR.instances.description.getData();

      /* if (editorContent.trim() === '') {
        $('#editorError').text('Description required');
        return false;
      }*/
      
      
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
        name: "required",
        designation: "required",
        image: "required",

      },
      messages: {
        name: "Please enter name",
        designation: "Please enter designation",
        image: "Please select image",

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
      
      if (!this.value.match(/\.(jpg|jpeg|png|gif|webp)$/i)){
           alert('This is not an allowed file type.');
            this.value = '';
      }
      /*else{
           alert("hello")
      }*/
    //var ext = this.value.match(/\.(.+)$/)[1];
    // var ext = /[^.]+$/.exec(this.value)
    //alert(ext);
    /*switch (ext) {
      case 'jpg':
      case 'jpeg':
      case 'png':
      case 'gif':
      case 'webp':
        break;
      default:
        alert('This is not an allowed file type.');
        this.value = '';
    }*/
  });
</script>

<script type="text/javascript">
  $(function() {

    var table = $('#category_dtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('showAmendment')}}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'id',

          orderable: false,
          searchable: false
        },
        {
          data: 'name',
          name: 'name'
        },
        {
          data: 'designation',
          name: 'designation',
        },

        {
          data: 'image',
          name: 'image'
        },

        {
          data: 'status',
          name: 'status'
        },

        {
          data: 'action',
          name: 'action'
        },

      ]
    });


  });
</script>

<script type="text/javascript">
  function statusAmend(id) {
    $.ajax({
      type: "GET",
      url: "{{url('statusAmendment')}}" + id,
      success: function(res) {
        alert('Status Updated Successfully!');
      }
    });
  }
</script>

@endsection