@extends('layout.main-template')
@section('content')
<title>{{ $title }}</title>

<style>
  .right {
    float: right;
  }
  
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
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
  @if($edit_caption)
  <div class="col-md-12 ">
    <div class="card ">
      <div class="card-header">
        <a href="{{url('photo')}}" class="btn btn-primary right">Add Photo</a>
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
          @if($edit_caption)
          <form action="{{url('updatePhotos')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1">Edit Photo</h4>
              </div>
            </div>
            @else
            <form action="{{url('addPhotos')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1">Add Photo</h4>
                </div>
              </div>
              @endif
              @csrf
              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-lg-10">
                  <label>Title <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_caption ?$edit_caption->id : ''}}">
                  <input type="text" class="form-control" id="title" name="title" value="{{old('title',$edit_caption ?$edit_caption->title : '')}}" placeholder="Enter title">
                  <span style="color:red">@error('title'){{ $message}} @enderror</span>
                </div>
                <div class="col-md-6">
                <label for="exampleInputdate" class="form-label"> Date<span class="text-danger">*</span></label>
                  <input type="date" class="form-control" id="date" name="date" value="{{old('date',$edit_caption ? $edit_caption->date : '')}}">
                  <span style="color:red">@error('date'){{ $message}} @enderror</span>
                </div>
                <div class="col-md-6">
                 
                  @if($edit_caption)
                 <!-- <input type="file" class="form-control " id="imageS" name="imageS" value="{{old('image',$edit_caption ? $edit_caption->image : '')}}" accept="image/png, image/jpeg,image/jpg">-->
                 <!-- <img src="{{url('uploadphoto/').'/'.($edit_caption ? $edit_caption->image :' ' ) }}" id="image-preview" style="height:30px;width:30px;">-->
                  @else
                   <label for="file">Upload Image <span class="text-danger">*</span></label>
                  <input class="form-control" type="file" id="image" name="image[]" multiple accept="image/png, image/jpeg,image/jpg" value="{{old('image')}}">
                  <!--<img src="{{url('user.png')}}" style="height:30px;width:38px;" id="preview-image-before-upload">-->
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
              <h4 class="card-title mb-0 flex-grow-1">Photo List</h4>
            </div>
          </div>
        </div>
        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>
              <th>Sr no</th>
              <th>Title</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- delete modal -->
<div class="modal fade bd-example-modal-sm" id="exampleModalSmall" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h5>Are you sure you want to delete?</h5>
        <input type='hidden' name='data_id' id="del_id" />
      </div>
      <!--end modal-body-->
      <div class="modal-footer">
        <!-- <a href="#" class="btn btn-soft-primary btn-sm" id="delete-id" >Delete</a> -->
        <a href="#" class="btn btn-soft-primary btn-sm" id="deleteId">Delete</a>
        <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
      <!--end modal-footer-->
    </div>
    <!--end modal-content-->
  </div>
  <!--end modal-dialog-->
</div>
<!--end delete modal-->


<!-- Modal -->
<!-- Default Modals -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add More</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <div class="modal-body">
        <form action="{{url('addImage')}}" class="form-control" id="formModal" name="form" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-8">
              <input type="hidden" class="form-control " id="img_id" name="img_id" value="">
              <input type="file" class="form-control " id="image" name="image[]" multiple value="" accept="image/png, image/jpeg,image/jpg">
            </div>
            <div class="col-md-4">
              <button class="btn btn-primary" type="submit" id="modalSubmitbtn">Submit</button>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- image modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content" style="background-color: aliceblue;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">View Photos
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="img">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end image modal -->

@endsection
<script type="text/javascript">
  function statusData(id) {
    $.ajax({
      type: "GET",
      url: "{{url('statusPhotos')}}" + id,
      success: function(res) {
        alert('Status Updated Successfully!');
      }
    });
  }

  function imageData(id) {
    $.ajax({
      type: "GET",
      url: "{{url('listImag')}}" + id,
      success: function(res) {
        $('#exampleModalScrollable').modal('show');
        $('#img').html(res);

      }
    });
  }

  function delImage(id) {
    if (confirm('Are you sure you want to delete this?')) {
      $.ajax({
        type: "GET",
        url: "{{url('delPhotos')}}" + id,
        success: function(res) {
          $("#delete_image_" + id).remove();
        }
      });
    }
  }

  function addImg(id) {
    $('#img_id').val(id);
    $('#image-error').html("");


  }

  function deleteData(id) {
    $('#exampleModalSmall').modal('show');
    $('#deleteId').attr("href", "deletePhotos" + id)
  }
</script>
<style>
  .error {
    color: red;
  }
</style>
@section('external-js')
<script type="text/javascript">
  $(function() {
    var table = $('#category_dtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('showPhotos')}}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'id',
          orderable: false,
          searchable: false
        },
        {
          data: 'title',
          name: 'title',
        },
        {
          data: 'date',
          name: 'date',
        },
        {
          data: 'status',
          name: 'status',
        },
        {
          data: 'action',
          name: 'action',
        }
      ]
    });


  });
</script>


<script>
  $(document).ready(function($) {
    $("#form1").validate({
      rules: {
        title: "required",
        date: "required",
        "image[]": {
          required: true,
          //accept: "image/*"
        },
      },
      messages: {
        title: "Please enter title",
        date: "Please select date",
        "image[]": {
          required: "Please select image.",
          //accept: "Please upload file in these format only (jpg, jpeg, png, webp)",
        }
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

  $('#imageS').change(function() {
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
  $('input[type="file"]').on('change', function() {
    var files = this.files;
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var ext = file.name.split('.').pop().toLowerCase();

      switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
        case 'webp':
          break;
        default:
          alert('Please upload file in these format only (jpg, jpeg, png, webp). ');
          this.value = '';
      }
    }
  });
</script>
<script>
  $('#modalSubmitbtn').on('click', function() {
    $("#formModal").validate({
      rules: {
        'image[]': "required",
      },
      messages: {
        'image[]': "Please select image",
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
</script>
@endsection