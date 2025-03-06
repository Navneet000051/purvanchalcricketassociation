@extends('layout.main-template')
@section('external-css')
@endsection
@section('content')
<div class="position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg profile-setting-img">
        <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
        <div class="overlay-content">
            <div class="text-end p-3">
                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                    <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                    {{-- <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                        </label> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-3">
        <div class="card mt-n5">
            <div class="card-body p-4">
                <div class="text-center">
                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                        <img src="{{url('frontend/images/logo/logo.jpg')}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                <span class="avatar-title rounded-circle bg-light text-body">
                                    <i class="ri-camera-fill"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                    <h5 class="fs-16 mb-1">{{ Auth::user()->name }}</h5>
                    <p class="text-muted mb-0"></p>
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card mt-xxl-n5">
            <div class="card-header ">

                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0  " role="tablist">

                    <li class="nav-item  ">

                        <a class="nav-link  <?php if ($tab == 'profile') {
                                                echo 'active';
                                            } else {
                                                echo '';
                                            } ?>" onclick="get_tap(1);" data-bs-toggle="tab" href="#personalDetails" role="tab">
                            <i class="fas fa-home"></i> Personal Details
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if ($tab == 'change_password') {
                                                echo 'active';
                                            } else {
                                                echo '';
                                            } ?>" onclick="get_tap(2);" data-bs-toggle="tab" href="#changePassword" role="tab">
                            <i class="far fa-user"></i> Change Password
                        </a>
                    </li>



                </ul>
            </div>

            <div class="card-body p-4">

                <div class="tab-content ">

                    <div class="tab-pane <?php if ($tab == 'profile') {
                                                echo 'active';
                                            } else {
                                                echo '';
                                            } ?>" id="personalDetails" role="tabpanel">
                        <input type="hidden" value="1">
                        <form action="{{url('update_profile')}}" method="post">
                            @csrf

                            <div class="row ">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="firstnameInput" class="form-label">Name
                                        </label>
                                        <input type="text" name="name" class="form-control" id="firstnameInput" placeholder="Enter your name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <!--end col-->

                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phonenumberInput" class="form-label">Phone
                                            Number</label>
                                        <input type="text" name="mobile" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{ Auth::user()->mobile }}">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email
                                            Address</label>
                                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">Updates</button>

                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane <?php if ($tab == 'change_password') {
                                                echo 'active';
                                            } else {
                                                echo '';
                                            } ?>" id="changePassword" role="tabpanel">
                        <form method="post" action="{{url('update_password')}}" id="password">
                            @csrf

                            <div class="row g-2">
                                <div class="col-lg-4">
                                    <div>
                                        <label for="oldpasswordInput" class="form-label">Old
                                            Password*</label>
                                        <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter current password">
                                        <span style="color:red">@error('old_password'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div>
                                        <label for="newpasswordInput" class="form-label">New
                                            Password*</label>
                                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter new password">
                                        <span style="color:red">@error('new_password'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div>
                                        <label for="confirmpasswordInput" class="form-label">Confirm
                                            Password*</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password">
                                        <span style="color:red">@error('confirm_password'){{ $message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="text-end mt-4">
                                        <button type="submit" class="btn btn-success">Change
                                            Password</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>

                    </div>



                </div>


            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection
@section('external-js')
<style>
    .error{
        color: red;
    }
    </style>
<script>
    $('input').keypress(function(e) {
        if (this.value.length === 0 && e.which === 32) e.preventDefault();
    });

    $('#password').validate({
        rules: {
            old_password: "required",
            new_password: "required",
            confirm_password: {
                required:true,
                equalTo:'#new_password',
            },
        },
        messages: {
            old_password: "Please enter old_password ",
            new_password: "Please enter new_password ",
            confirm_password: {
                required:"Please enter confirm_password ",
                equalTo:'Confirm password does not match the new password',
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
    })
</script>

<script src="custom_js\profile.js"></script>
@endsection