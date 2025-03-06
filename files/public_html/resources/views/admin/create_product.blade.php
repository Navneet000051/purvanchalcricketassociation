@extends('layout.main-template')
@section('external-css')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <title>{{ $title }}</title>
    <style>
        .w-25 {
            width: 50% !important;
        }

        .img-size {
            height: 100px;
            weight: 100px;
            border: 1px solid;
        }
    </style>
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Manage Product</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Admin</a>
                        </li>
                        <li class="breadcrumb-item active">Manage Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 px-0">
            <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="accordionwithplusExample1">
                        <button id="collap_button" class="accordion-button collapsed card-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse1" aria-expanded="true"
                            aria-controls="accor_plusExamplecollapse1">
                            <div class="card-header align-items-center d-flex card-primary">
                                <h4 class="card-title mb-0 flex-grow-1" id="card_title">Add Product</h4>
                            </div>
                        </button>
                    </h2>
                    <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse "
                        aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
                        <div class="accordion-body">
                            <div class="card">

                                <!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form id="product_form">
                                            <div class="row g-2">
                                                <input type="hidden" name="id" id="id">
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="title"
                                                            name="title" placeholder="Enter your Title" />
                                                        <label for="firstnamefloatingInput">Enter Title</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <select class="js-example-disabled form-control" name="category"
                                                            id="category">
                                                            <option value="">Select Category</option>
                                                            @if (!empty($category) && count($category) > 0)
                                                                @foreach ($category as $value)
                                                                    <option value="{{ $value->id }}">{{ $value->title }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <label for="cityfloatingInput">Category</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="author_name"
                                                            name="author_name" placeholder="Enter your Title" />
                                                        <label for="firstnamefloatingInput">Enter Author Name</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="mrp"
                                                            name="mrp" placeholder="Enter.." />
                                                        <label for="firstnamefloatingInput">MRP</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="genre"
                                                            name="genre" placeholder="Enter.." />
                                                        <label for="firstnamefloatingInput">Genre</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <select class="js-example-disabled form-control" name="language"
                                                            id="language">
                                                            <option value="">Select Language</option>
                                                            @if (!empty($language) && count($language) > 0)
                                                                @foreach ($language as $value)
                                                                    <option value="{{ $value->id }}">{{ $value->name }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <label for="cityfloatingInput">Language</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <select class="js-example-disabled form-control" name="binding_type"
                                                            id="binding_type">
                                                            <option value="">Select Binding</option>
                                                            <option value="1">Hardcover</option>
                                                            <option value="2">Paperback</option>
                                                        </select>
                                                        <label for="cityfloatingInput">Binding</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="no_of_page"
                                                            name="no_of_page" placeholder="Enter your Title" />
                                                        <label for="firstnamefloatingInput">Number of Pages</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="stockQuantity"
                                                            name="stockQuantity" placeholder="Enter.." />
                                                        <label for="firstnamefloatingInput">Stock Quantity</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="isbn"
                                                            name="isbn" placeholder="Enter.." />
                                                        <label for="firstnamefloatingInput">ISBN</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-floating">
                                                        <select class="js-example-disabled form-control" name="type"
                                                            id="type">
                                                            <option value="">Select Book Type</option>
                                                            @if (!empty($book_type) && count($book_type) > 0)
                                                                @foreach ($book_type as $value)
                                                                    <option value="{{ $value->id }}">{{ $value->title }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <label for="cityfloatingInput">Book Type</label>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="formFile" class="form-label">Upload Image</label>
                                                        <input class="form-control" type="file" id="image"
                                                            name="image" onchange="showSelectedImage(this)">
                                                    </div>

                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group" id="myImg">
                                                        <img src="{{ url('default.jpg') }}" id="blah" width="100px"
                                                            height="100px">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-floating">
                                                        <textarea type="text" class="form-control" id="description" name="description"
                                                            placeholder="Enter your Sort Description"></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card-footer card-light">
                                    <div class="hstack gap-2 justify-content-end">
                                        <a href="javascript:void(0)" class="btn btn-light" id="crl_btn">Clear</a>
                                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                    <h4 class="card-title mb-0 flex-grow-1">Product List</h4>
                </div>
                <!-- end card header -->
                <div class="card-body">
                    <table id="product_table" class="table table-responsive nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>MRP</th>
                                <th>Language</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('external-js')
    <script src="{{ url('custom_js/product.js') }}"></script>
@endsection
