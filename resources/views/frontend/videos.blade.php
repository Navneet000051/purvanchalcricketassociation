@extends('frontend.template')
@section('content')

<section class="banner-part sub-main-banner float-start w-100">
  <div class="baner-imghi">
    <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner" />
  </div>

  <div class="sub-banner">
    <div class="container">
      <h1 class="text-center"> Videos</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">/ Videos</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<section class="float-start w-100 body-part py-5 ">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- =======1st section start========= -->
        <div class="mediasection d-inline-block w-100  mb-5 pb-5 rounded">
          <div class="container">
            <div class="mindle-heading text-center">
              <!-- <h5> News Videos </h5> -->
              <h1> LATEST <span> Videos</span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Videos</span>

          </div>
        </div>


      </div>
      <!-- =======1st section end========= -->

      <div class="row">
        @foreach($video_data as $value)
        <div class="col-6">
          <div class="card border-0">
            <div class="card-body p-4 shadowc rounded">
              <div class="o-video">
                <iframe width="100%" height="315" src="{{$value->link}}?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>


  </div>





</section>
@endsection