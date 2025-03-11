@extends('layout.main-template')

@section('content')
<div class="row">
  <div class="col-md-12 ">
    <div class="card">
      <div class="card-body">
        <div class="live-preview">
          <div class="card">
            <div class="card-header align-items-center d-flex card-primary">
              <h4 class="card-title mb-0 flex-grow-1">Contact List</h4>
            </div>
          </div>
        </div>

        <table class="table table-bordered data-table" id="category_dtable">
          <thead>
            <tr>

              <th>Sr no</th>
              <th>Name</th>
             
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
          orderable: false,
          searchable: false
        },
        {
          data: 'name',
          name: 'name',
        },
        // {
        //   data: 'lastname',
        //   name: 'lastname',
        // },
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