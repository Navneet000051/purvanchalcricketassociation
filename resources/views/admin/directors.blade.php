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
  @if($edit_directors)
  <div class="col-md-12 ">
    <div class="card ">
      <div class="card-header">
        <a href="{{url('directors')}}" class="btn btn-primary right">Add Directors </a>
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
          @if($edit_directors)
          <form action="{{url('updateDirectors')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1"> Edit Directors</h4>
              </div>
            </div>
            @else
            <form action="{{url('addDirectors')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1"> Add Directors</h4>
                </div>
              </div>
              @endif
              @csrf

              <div class="row g-3">
              <div class="col-md-4">
                  <label> Name <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_directors ? $edit_directors->id : ''}}">
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name',$edit_directors ? $edit_directors->name: '')}}" placeholder="Enter name">
                  <span style="color:red">@error('name'){{ $message}} @enderror</span>
                </div>
                <div class="col-md-4 mt-4">
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
              </div>
              </div>
              <br>
              
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
              <h4 class="card-title mb-0 flex-grow-1">Directors List</h4>
            </div>
          </div>
        </div>
        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>
              <th>Sr no</th>
              <th>Name</th>
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
</div>
<!--end modal-->

@endsection

@section('external-js')

<style>
  .error {
    color: red;

  }
</style>
<script>
  function deleteData(id) {
    $('#exampleModalSmall').modal('show');
    $('#deleteId').attr("href", "deleteDirectors" + id)
  }

  function statusData(id) {
    $.ajax({
      type: "GET",
      url: "{{url('directorStatus')}}" + id,
      success: function(res) {
        alert("Status updated successfully");
      }
    });
  }
</script>
<script type="text/javascript">
  $(function() {

    var table = $('#category_dtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('showDirectors')}}",
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
<script>
  $(document).ready(function($) {

    $("#form1").validate({
      rules: {
        name: "required",
      },
      messages: {
        name: "Please enter name",
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