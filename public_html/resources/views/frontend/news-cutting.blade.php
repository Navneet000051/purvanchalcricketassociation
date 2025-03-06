@extends('frontend.template')
@section('content')
<section class="banner-part sub-main-banner float-start w-100">
   <div class="baner-imghi">
      <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner" />
   </div>
   <div class="sub-banner">
      <div class="container">
         <h1 class="text-center"> News cutting</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
               <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">/ News Cutting</li>
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

                     <!-- <h5> News cutting </h5> -->
                     <h1> LATEST <span> News</span> </h1>
                  </div>
                  <span class="bgi-text light-tsext01"> News cutting</span>

                 
                  <div class="row row-cols-2 row-cols-lg-4 mt-0 g-4 mt-5">
                     @foreach($news_data as $value)
                     <div class="col shadowc">
                        <a data-fancybox="wk" href="{{url('uploadNcutting',$value->image)}}" class="comon-links-divb05">
                           <figure>
                              <img src="{{url('uploadNcutting',$value->image)}}" alt="pbnm" />

                           </figure>
                        </a>
                     </div>
                     @endforeach
                  </div>


               </div>
            </div>


         </div>
         <!-- =======1st section end========= -->



      </div>
   </div>
</section>
@endsection