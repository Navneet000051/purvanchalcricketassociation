@extends('layout.main-template')

@section('content')
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
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@section('external-js')
<script type="text/javascript">
  $(function() {
    var table = $('#category_dtable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('showEmail')}}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'id',
        },
        {
          data: 'firstname',
          name: 'firstname',
        },
        {
          data: 'lastname',
          name: 'lastname',
        },
        {
          data: 'email',
          name: 'email',
        },
        {
          data: 'phone',
          name: 'phone',
        },
        {
          data: 'message',
          name: 'message',
        }
      ]
    });


  });
</script>
@endsection