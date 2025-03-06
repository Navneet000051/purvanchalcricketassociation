@extends('layout.main-template')

@section('content')

<style>
  .right{
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
  @if($edit_news)
 <div class="col-md-12 ">
    <div class="card ">
      <div class="card-header">
        <a href="{{url('news')}}" class="btn btn-primary right">News Cutting Add</a>
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

          @if($edit_news)
          <form action="{{url('updateNews')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1">News Cutting Edit</h4>
              </div>
            </div>
            @else
            <form action="{{url('addNews')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1">News Cutting Add</h4>
                </div>
              </div>
              @endif
              @csrf

              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-lg-10">
                  <label>Caption <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_news ? $edit_news->id : ''}}">
                  <input type="text" class="form-control" id="caption" name="caption" value="{{old('caption',$edit_news ? $edit_news->caption : '' )}}" placeholder="Enter caption">
                  <span style="color:red">@error('caption'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-6">
                  <label>Upload user pic <span class="text-danger">*</span></label>
                  @if($edit_news)
                  <input type="file" class="form-control " id="imageS" name="imageS" value="{{old('image',$edit_news ? $edit_news->image : '')}}" accept="image/png, image/jpeg,image/jpg">
                  <img src="{{url('uploadNcutting/').'/'.($edit_news ? $edit_news->image :' ' ) }}" id="image-preview" style="height:30px;width:30px;">
                  @else
                  <input type="file" class="form-control " id="image" name="image" value="{{old('image')}} " accept="image/png, image/jpeg,image/jpg">
                  <img src="{{url('user.png')}}" style="height:30px;width:38px;" id="preview-image-before-upload">
                  @endif
                  <span style="color:red">@error('image'){{ $message}} @enderror</span>
                </div>

              </div>
              <br>

              <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Submit</button>
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
              <h4 class="card-title mb-0 flex-grow-1">Category List</h4>
            </div>
          </div>
        </div>

        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>

              <th>Sr no</th>
              <th>Caption</th>
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
<script>
  function deleteData(id) {
    $('#exampleModalSmall').modal('show');
    $('#deleteId').attr("href", "deleteNews" + id)
  }

  function statusData(id) {
    $.ajax({
      type: "GET",
      url: "{{url('statusNews')}}" + id,
      success: function(res) {
        alert("Status updated successfully");
      }
    });
  }
</script>
@section('external-js')

<style>
  .error {
    color: red;

  }
</style>
<script type="text/javascript">
  $(function() {

    var table = $('#category_dtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('showNews')}}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'id',

          orderable: false,
          searchable: false
        },
        {
          data: 'caption',
          name: 'caption'
        },
        {
          data: 'image',
          name: 'image',
          orderable: false,
          searchable: false
        },

        {
          data: 'status',
          name: 'status',

        },
        {
          data: 'action',
          name: 'action'
        },
      ]
    });


  });
</script>
<script>
  $(document).ready(function($) {

    $("#form1").validate({
      rules: {
        caption: "required",
        image: "required",
      },
      messages: {
        caption: "Please enter caption",
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

  $('#image').change(function() {

    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#preview-image-before-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

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


  $('input').keypress(function(e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
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