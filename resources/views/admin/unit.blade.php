@extends('layout.main-template')

@section('content')
<title>{{ $title }}</title>
<style>
  .right {
    float: right;
  }
</style>
<div class="row">
  @if($edit_unit)
  <div class="col-md-12 ">
    <div class="card ">
      <div class="card-header">
        <a href="{{url('unit')}}" class="btn btn-primary right">Add Unit </a>
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
          @if($edit_unit)
          <form action="{{url('updateUnit')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1"> Edit Unit</h4>
              </div>
            </div>
            @else
            <form action="{{url('add_unit')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1"> Add Unit</h4>
                </div>
              </div>
              @endif
              @csrf

              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-md-4">
                  <label>District <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_unit ? $edit_unit->id : ''}}">
                  <input type="text" class="form-control" id="district" name="district" value="{{old('district',$edit_unit ? $edit_unit->district : '')}}" placeholder="Enter district">
                  <span style="color:red">@error('district'){{ $message}} @enderror</span>
                </div>
                <div class="col-md-4">
                  <label>Board Of Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name',$edit_unit ? $edit_unit->name : '')}}" placeholder="Enter name">
                  <span style="color:red">@error('name'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-4">
                  <label>Secretary <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="secretary" name="secretary" value="{{old('secretary',$edit_unit ? $edit_unit->secretary : '')}}" placeholder="Enter secretary">
                  <span style="color:red">@error('secretary'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-4">
                  <label>Mobile no.<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="mobile" name="mobileno" value="{{old('mobileno',$edit_unit ? $edit_unit->mobileno : '')}}" placeholder="Enter mobile">
                  <span style="color:red">@error('mobile'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-4">
                  <label>President </label>
                  <input type="text" class="form-control" id="president" name="president" value="{{old('president',$edit_unit ? $edit_unit->president : '')}}" placeholder="Enter president">
                  <span style="color:red">@error('president'){{ $message}} @enderror</span>
                </div>

                <div class="col-md-4">
                  <label> President Mobile no. </label>
                  <input type="number" class="form-control" id="president_mobile" name="president_mobile" value="{{old('president_mobile',$edit_unit ? $edit_unit->president_mobile : '')}}" placeholder="Enter president_mobile">
                  <span style="color:red">@error('president_mobile'){{ $message}} @enderror</span>
                </div>


              </div>
              <br>
              <div class="col-md-4">
                <button class="btn btn-primary " type="submit">Submit</button>
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
              <h4 class="card-title mb-0 flex-grow-1">Unit List</h4>
            </div>
          </div>
        </div>
        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>
              <th>Sr no</th>
              <th>Name</th>
              <th>Mobileno.</th>
              <th>Secretary</th>
              <th>President</th>
              <th>President Mobileno</th>
              <th>District</th>
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
    $('#deleteId').attr("href", "deleteUnit" + id)
  }

  function statusData(id) {
    $.ajax({
      type: "GET",
      url: "{{url('Unitstatus')}}" + id,
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
      ajax: "{{url('show_unit')}}",
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
          data: 'mobileno',
          name: 'mobileno'
        },
        {
          data: 'secretary',
          name: 'secretary'
        },
        {
          data: 'president',
          name: 'president'
        },
        {
          data: 'president_mobile',
          name: 'president_mobile'
        },
        {
          data: 'district',
          name: 'district'
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
        mobileno: {

          maxlength: 10,
          minlength: 10
        },
        // president: "required",
        president_mobile: {
          maxlength: 10,
          minlength: 10
        },
        secretary: "required",
        district: "required",
      },
      messages: {
        name: "Please enter name",
        mobileno: {

          maxlength: "Mobile no. should not be greater than 10 digits",
          minlength: "Mobile no. should not be less than 10 digits"
        },
        president_mobile: {
          maxlength: "Mobile no. should not be greater than 10 digits",
          minlength: "Mobile no. should not be less than 10 digits"
        },

        secretary: "Please enter secretary",
        district: "Please enter district",
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