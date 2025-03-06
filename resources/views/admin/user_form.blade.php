@extends('layout.main-template')

@section('content')

<title>{{ $title }}</title>

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
          @if($edit_user)
          <form action="{{route('update_user')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header align-items-center d-flex card-primary">
                <h4 class="card-title mb-0 flex-grow-1">User Edit</h4>
              </div>
            </div>

            @else
            <form action="{{url('insertUser')}}" class="form-control" id="form1" name="form1" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header align-items-center d-flex card-primary">
                  <h4 class="card-title mb-0 flex-grow-1">User Add</h4>
                </div>
              </div>
              @endif
              @csrf

              <div class="row g-3">
                <input type="hidden" name="id" id="id">
                <div class="col-lg-4">
                  <label>Name <span class="text-danger">*</span></label>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$edit_user ? $edit_user->id : ''}}">


                  <input type="text" class="form-control" id="name" name="name" value="{{old('name', $edit_user ? $edit_user->name : '')}}" placeholder="Enter name" onkeydown="return /[a-z, ]/i.test(event.key)">
                  <span style="color:red">@error('name'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="email" name="email" value="{{old('email',$edit_user ? $edit_user->email : '')}}" placeholder="Enter email">
                  <span style="color:red">@error('email'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Mobile <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="mobile" name="mobile" value="{{old('mobile',$edit_user ? $edit_user->mobile : '')}}" placeholder="Enter mobile">
                  <span style="color:red">@error('mobile'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Mother name</label>
                  <input type="text" class="form-control" id="mothername" name="mothername" value="{{old('mothername',$edit_user ? $edit_user->mothername : '')}}" placeholder="Enter mother name" onkeydown="return /[a-z, ]/i.test(event.key)">
                  <span style="color:red">@error('mothername'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Father name</label>
                  <input type="text" class="form-control" id="fathername" name="fathername" value="{{old('fathername',$edit_user ? $edit_user->fathername : '')}}" placeholder="Enter father name" onkeydown="return /[a-z, ]/i.test(event.key)">
                  <span style="color:red">@error('fathername'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{old('address',$edit_user ? $edit_user->address : '')}}">
                  <span style="color:red">@error('address'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>State <span class="text-danger">*</span></label>
                  @if($edit_user!='')
                  <select class="form-control" name="state" id="select-state" value="{{old('state',$edit_user ? $edit_user->state : '')}}">
                    <option value="">Please enter state ------</option>
                    @foreach($states as $key => $value)
                    <option value="{{$value->id}}" {{$edit_user->state == $value->id  ? 'selected' : ''}}>{{$value->name}}</option>
                    @endforeach
                  </select>
                  @else
                  <select class="form-control" name="state" id="select-state" value="{{old('state')}}">
                    <option value="">Please enter state ------</option>
                    @foreach($states as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
                  @endif

                  <span style="color:red">@error('state'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>City <span class="text-danger">*</span></label>
                  @if($edit_user!='')
                  <select name="city" class="form-control" id="select-user" value="{{old('city')}}">
                    @foreach($city_edit as $key => $city)
                    <option value="{{$city->id}}" {{$edit_user->city == $city->id ? 'selected' :''}}>{{$city->name}}</option>
                    @endforeach
                  </select>
                  @else
                  <select name="city" class="form-control" id="select-user" value="{{old('city',$edit_user ? $edit_user->city : '')}}">
                    <option value="">Please enter city ------</option>

                  </select>
                  @endif
                  <span style="color:red">@error('city'){{ $message}} @enderror</span>
                </div>


                <div class="col-lg-4">
                  <label>Pincode <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" value="{{old('pincode',$edit_user ? $edit_user->pincode : '')}}">
                  <span style="color:red">@error('pincode'){{ $message}} @enderror</span>
                </div>
              </div>
              <br>

              <div class="row g-3">

                <div class="col-lg-4">
                  <label>Adhaar <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="adhaar" name="adhaar" placeholder="Enter adhaar" value="{{old('adhaar',$edit_user ? $edit_user->adhaar : '')}}">
                  <span style="color:red">@error('adhaar'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label> Upload <span class="text-danger">*</span></label>

                  @if($edit_user)
                  <div class="col-sm-10">
                    <input type="file" class="form-control " id="image-adhaar" name="image-adhaar" value="{{old('adhaar_upload',$edit_user ? $edit_user->adhaar_upload : '')}}" accept="image/png, image/jpeg,image/jpg">
                    <img src="{{url('uploadskd/').'/'.($edit_user ? $edit_user->adhaar_upload :' ' ) }}" id="image-adhaar-preview" style="height:30px;width:30px;">
                  </div>
                  @else
                  <input type="file" class="form-control " id="adhaar_upload" name="adhaar_upload" value="{{old('adhaar_upload')}}" accept="image/png, image/jpeg,image/jpg">
                  <img src="{{url('user.png')}}" style="height:30px;width:38px;" id="preview-image-adhaar-before-upload">
                  @endif
                  <span style="color:red">@error('adhaar_upload'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Pan card <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="pancard" name="pancard" placeholder="Enter pan number" value="{{old('pancard',$edit_user ? $edit_user->pancard : '')}}">
                  <span style="color:red">@error('pancard'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Upload user pic <span class="text-danger">*</span></label>

                  @if($edit_user)
                  <div class="col-sm-10">
                    <input type="file" class="form-control " id="image-pancard" name="image-pancard" value="{{old('pancard_upload',$edit_user ? $edit_user->pancard_upload : '')}}" accept="image/png, image/jpeg,image/jpg">
                    <img src="{{url('uploadskd/').'/'.($edit_user ? $edit_user->pancard_upload :' ' ) }}" id="image-pancard-preview" style="height:30px;width:30px;">
                  </div>
                  @else
                  <input type="file" class="form-control " id="pancard_upload" name="pancard_upload" value="{{old('image')}}" accept="image/png, image/jpeg,image/jpg">
                  <img src="{{url('user.png')}}" style="height:30px;width:38px;" id="preview-image-pancard-before-upload">
                  @endif
                  <span style="color:red">@error('image'){{ $message}} @enderror</span>
                </div>

                <div class="col-lg-4">
                  <label>Upload user pic <span class="text-danger">*</span></label>

                  @if($edit_user)
                  <div class="col-sm-10">
                    <input type="file" class="form-control " id="imageS" name="imageS" value="{{old('image',$edit_user ? $edit_user->image : '')}}" accept="image/png, image/jpeg,image/jpg">
                    <img src="{{url('uploadskd/').'/'.($edit_user ? $edit_user->image :' ' ) }}" id="image-preview" style="height:30px;width:30px;">
                  </div>
                  @else
                  <input type="file" class="form-control " id="image" name="image" value="{{old('image')}}" accept="image/png, image/jpeg,image/jpg">
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
@endsection




@section('external-js')

<style>
  .error {
    color: red;

  }
</style>

<script>
  $(document).ready(function($) {

    $("#form1").validate({
      rules: {
        name: "required",
        email: {
          required: true,
          email: true,
        },
        address: "required",
        mobile: {
          required: true,
          maxlength: 10,
          minlength: 10,
          number: true,

        },
        mothername: "required",
        fathername: "required",
        state: "required",
        city: "required",
        pincode: {
          required: true,
          minlength: 6,
          maxlength: 6,
        },
        adhaar: {
          required: true,
          minlength: 12,
          maxlength: 12,
        },
        pancard: "required",
        adhaar_upload: "required",
        pancard_upload: "required",
        image: "required",
      },
      messages: {
        name: "Please enter name",

        email: {
          required: "Please enter email",
          email: "Please enter valid email",
        },

        mobile: {
          required: 'Please enter mobile number',
          maxlength: "Mobile number must be an 10 digits",
          minlength: "Mobile number should not be less than 10 digits",
          number: "Please enter valid mobile number",
        },
        address: "Please enter address",
        mothername: 'Please enter mother name',
        fathername: 'Please enter father name',
        state: 'Please enter state',
        city: 'Please enter city',
        pincode: {
          required: 'Please enter pincode',
          pincode: "Please enter valid pincode",
          minlength: "Pincode must be an 6 digits",
          maxlength: "Pincode should not  be greater than 6 digits ",
        },
        adhaar: {
          required: 'Please enter adhaar number',
          minlength: "Adhaar number must be an 12 digits",
          maxlength: "Adhaar number  should not  be greater than 12 digits  ",
        },
        adhaar_upload: 'Please select adhaar card',
        pancard: 'Please enter pan number',
        pancard_upload: 'Please select pancard ',
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

  $('#select-state').on('change', function() {

    var state = $('#select-state').val();
    var city = $('#select-state').val();
    console.log(state);
    $.ajaxSetup({
      headers: {
        "X-CSRF-Token": $("meta[name=csrf-token]").attr("content")
      },
    });
    $.ajax({

      url: host + "/get_city",
      type: 'post',
      data: {
        state_id: state
      },
      success: function(res) {
        console.log(res.data)

        $("#select-user").html('');
        $('#select-user').html('<option value="">Select City</option>');
        $.each(res.data, function(key, value) {

          $("#select-user").append('<option value="' + value
            .id + '">' + value.name + '</option>');


        });
      }

    });

  });

  $('#adhaar_upload').change(function() {

    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#preview-image-adhaar-before-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

  });

  $('#image_adhaar').change(function() {
    // $("#image-preview").attr('src',"")
    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#image-adhaar-preview').attr('src', e.target.result);
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
  $('#image').change(function() {
    // $("#image-preview").attr('src',"")
    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#image-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

  });

  $('#pancard_upload').change(function() {

    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#preview-image-pancard-before-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

  });

  $('#image-pancard').change(function() {
    // $("#image-preview").attr('src',"")
    let reader = new FileReader();

    reader.onload = (e) => {
      console.log(e.target.result);
      $('#image-pancard-preview').attr('src', e.target.result);
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