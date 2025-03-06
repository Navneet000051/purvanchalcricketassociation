@extends('frontend.template')
@section('content')

<section class="banner-part sub-main-banner float-start w-100">

    <div class="baner-imghi">
        <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner" />
    </div>

    <div class="sub-banner">
        <div class="container">
            <h1 class="text-center"> Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">/Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="float-start w-100 body-part pt-0">

    <div class="contact-page d-inline-block w-100">
        <div class="container">

            <div class="row row-cols-1 row-cols-lg-2 g-5">
                <!-- <div class="col">
                     <div class="faq-section1">
                         <h2 class="my-0"> frequently asked questions </h2>
                         <p class="mt-3"> Find Your Question What you want to know <br/>
                            about Our Account</p>


                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header mt-0" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      How to Get Ticket?
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                            </p>
                                            <p class="mt-3"> Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      How to Book Ticket?
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and 
                                            web page editors now use Lorem Ipsum as their default model text, </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Why Should You Member?
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and 
                                            web page editors now use Lorem Ipsum as their default model text, </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                     </div>
                 </div> -->
                <div class="col">
                    <div class="contact-use-div mt-5">
                        <h2> Contact Details </h2>
                        <ul class="list-untyled list-phone mt-4">
                            <li>
                                <span class="d-block"> E-MAIL </span>
                                <span> <i class="fas fa-envelope"></i> example@gmail.com</span>
                            </li>
                            <li>
                                <span class="d-block"> ADDRESS </span>
                                <span> <i class="fas fa-map-marker-alt"></i> Sector-5/194, Vikas Nagar, Lucknow, Uttar Pradesh</span>
                            </li>
                            <li>
                                <span class="d-block"> PHONE </span>
                                <span> <i class="fas fa-phone-alt"></i> +91 73099 94326</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="contact-use-div">

                        <div class="container-fluid">
                            @if(Session::has('success'))
                            <p class="alert alert-info">{{ Session::get('success') }}</p>
                            @endif
                            @if(Session::has('error'))
                            <p class="alert alert-danger">{{ Session::get('error') }}</p>
                            @endif




                        </div>

                        <h2 class="mt-5"> Get In Touch </h2>
                        <form id="form1" action="{{url('addMail')}}" method="post">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" onkeydown="return /[a-z, ]/i.test(event.key)">
                                        <span style="color:red">@error('firstname'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" onkeydown="return /[a-z, ]/i.test(event.key)">
                                        <span style="color:red">@error('lastname'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                        <span style="color:red">@error('email'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone">
                                        <span style="color:red">@error('phone'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                        <span style="color:red">@error('message'){{ $message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" name="submit" class="btn comon-btn" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="location-div01 d-inline-block w-100">
                <div class="mindle-heading text-center">

                    <h5> Map </h5>
                    <h1> Office <span> Location </span> </h1>
                </div>
                <span class="bgi-text light-tsext01"> Map </span>


                <iframe class="w-100 mt-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12144.017759916967!2d-3.6883337!3d40.4530387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8fff6d26e2b1988!2sSantiago%20Bernab%C3%A9u%20Stadium!5e0!3m2!1sen!2sin!4v1661437221958!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>


        </div>


    </div>


</section>

@endsection
<style>
    .error {
        color: red;
    }
</style>
@section('external-js')


<script>
    $(document).ready(function($) {
        $("#form1").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,
                    number: true
                },
                message: "required"
            },
            messages: {
                firstname: "Please enter firstname",
                lastname: "Please enter lastname",
                email: {
                    required: "Please enter email",
                    email: "Please enter valid email"
                },
                phone: {
                    required: 'Please enter mobile number',
                    maxlength: "Mobile number must be an 10 digits",
                    minlength: "Mobile number should not be less than 10 digits",
                    number: "Please enter valid mobile number",
                },
                message: "Please enter message"

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
</script>
@endsection