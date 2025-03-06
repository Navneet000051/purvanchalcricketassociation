@extends('layout.main-template')
@section('external-css')
<title>{{ $title }}</title>
<style>
    .w-25 {
        width: 50% !important;
    }

    .w-25 {
        width: 50% !important;
    }

    .img-size {
        height: 100px;
        weight: 100px;
        border: 1px solid;
    }

    .right {
        float: right;
    }

    .button {

        margin: 5px;

    }
</style>
@endsection
@section('content')
<!-- start page title -->
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
        <div class="card ">
            <div class="card-header">
                <a href="{{url('Adduser')}}" class="btn btn-primary right">Add Users</a>
            </div>
        </div>

    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1">News List</h4>
            </div>
            <!-- end card header -->
            <div class="card-body">
                <table id="category_table" class="table table-responsive nowrap align-middle" style="width:100%">
                    <thead>

                        <tr>

                            <th>Sr no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>


                        @foreach($manages as $key =>$value)
                        <tr>
                            <td>{{$number}}</td>
                            <td>{{$value->manage_name}}</td>
                            <td>{{$value->manage_email}}</td>
                            <td>{{$value->manage_mobile}}</td>
                            <td>{{$value->manage_address}}</td>
                            <td>{{$value->state_name}}</td>
                            <td>{{$value->city_name}}</td>


                            <td>
                                <a href="{{route('edit_user',[$value->manage_id])}}"><i class="fas fa-edit edit"></i></a><br>
                                <a href="{{route('delete_user',[$value->manage_id])}}" onclick="return confirm('Are you sure? ')"> <i class="fa fa-trash delete"></i></a>

                            </td>
                        </tr>
                        <?php $number++; ?>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of table -->
    <!-- <div class="col-lg-4">
        <div class="card">
            <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1" id="card-title">Add Category</h4>
            </div> -->
    <!-- end card header -->
    <!-- <div class="card-body">
                <div class="live-preview">
                    <form id="category_form">
                        <div class="row g-3">
                            <input type="hidden" name="id" id="id">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                            </div>
                        </div>
                        <div>
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" id="category_image" name="category_image" onchange="showSelectedImage(this)">
                        </div>
                        <div class="col-lg-2 mt-2">
                            <div class="form-group col-6" id="myImg">
                                <img src="{{ url('default.jpg') }}" id="blah" width="100px" height="100px">
                            </div>
                        </div>
                </div>
            </div> -->
    <!-- <div class="card-footer card-light">

                <div class="hstack gap-2 justify-content-end">
                    <a href="javascript:void(0)" class="btn btn-light" id="crl_btn">Clear</a>
                    <button type="submit" id="btn_add" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div> -->
</div>
</div>
</div>
@endsection
@section('external-js')
<!-- <script src="{{ url('custom_js/category.js') }}"></script> -->
@endsection