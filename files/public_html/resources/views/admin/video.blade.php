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
  @if($edit_video)
  <div class="col-md-12 ">
    <div class="card ">
      <div class="card-header">
        <a href="{{url('video')}}" class="btn btn-primary right">Add Video</a>
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
          @if($edit_video)
          <form action="{{url('updateVideo')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1"> Edit Video</h4>
              </div>
            </div>
            @else
            <form action="{{url('addVideo')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1">Add Video </h4>
                </div>
              </div>
              @endif
              @csrf
              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-lg-10">
                  <label>Title <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_video ? $edit_video->id :''}}">
                  <input type="text" class="form-control" id="title" name="title" value="{{old('title',$edit_video ? $edit_video->title :'')}}" placeholder="Enter title">
                  <span style="color:red">@error('title'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-6">
                  <label>Video Type <span class="text-danger">*</span></label>
                  @if($edit_video)
                  <select class="form-select mb-3" aria-label="Default select example" name="video" id="video">
                    <option value="">Select</option>
                    <option value="1" {{$edit_video->video == "1" ? 'selected' :''}}>media</option>
                    <option value="2" {{$edit_video->video == "2" ? 'selected' :''}}>news video</option>
                  </select>
                  @else
                  <select class="form-select mb-3" aria-label="Default select example" name="video" id="video">
                    <option value="">Select</option>
                    <option value="1" @if (old('video')=="1" ) {{ 'selected' }} @endif>media</option>
                    <option value="2" @if (old('video')=="2" ) {{ 'selected' }} @endif>news video</option>
                  </select>
                  @endif
                  <span style="color:red">@error('news'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-6">
                  <label> Link <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="link" name="link" value="{{old('link',$edit_video ? $edit_video->link :'')}}" placeholder="Enter link">
                  <span style="color:red">@error('link'){{ $message}} @enderror</span>
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
              <h4 class="card-title mb-0 flex-grow-1">Video List</h4>
            </div>
          </div>
        </div>
        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>
              <th>Sr no</th>
              <th>Title</th>
              <th>Video</th>
              <th>Link</th>
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
<!--end modal-->
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
    $('#deleteId').attr("href", "deleteVideo" + id)
  }

  function statusData(id) {
    $.ajax({
      type: "GET",
      url: "{{url('statusVideo')}}" + id,
      success: function(res) {
        alert("Status Updated Successfully");
      }
    });
  }
</script>
<script type="text/javascript">
  $(function() {
    var table = $('#category_dtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('showVideo')}}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'id',
        },
        {
          data: 'title',
          name: 'title',
        },
        {
          data: 'video_type',
          name: 'video_type',
        },
        {
          data: 'link',
          name: 'link',
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
        video: "required",
        link: {
          required: true,
          url: true
        },
      },
      messages: {
        title: "Please enter title",
        video: "Please select video",
        link: {
          required: "Please enter url",
          url: "Please enter a valid url",
        },



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
</script>

@endsection