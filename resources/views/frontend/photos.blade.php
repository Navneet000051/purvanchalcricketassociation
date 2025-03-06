@extends('frontend.template')
@section('content')

<section class="banner-part sub-main-banner float-start w-100">

   <div class="baner-imghi">
      <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner" />
   </div>

   <div class="sub-banner">
      <div class="container">
         <h1 class="text-center"> Photos</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
               <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">/ Photos</li>
            </ol>
         </nav>
      </div>
   </div>





</section>

<section class="float-start w-100 body-part py-5 photos">

   <div class="container">
      <div class="row">

         @foreach($caption_data as $caption)
         <div class="col-12">
            <!-- =======1st section start========= -->
            <div class="mediasection d-inline-block w-100 shadowc mb-5 pb-5 rounded">
               <div class="container">
                  <div class="mindle-heading text-center">
                     <h5>{{$caption->title}}</h5>
                     <h1>{{date("d ", strtotime($caption->date))}}<span>{{date("F ", strtotime($caption->date))}}</span>{{date("y ", strtotime($caption->date))}}</h1>
                  </div>
                  <span class="bgi-text light-tsext01"> Photos</span>

                  <div class="row row-cols-2 row-cols-lg-4 mt-0 g-4 mt-3">
                     <?php
                     $photo = App\Models\photo::where('img_caption_id', $caption->id)->get();
                     ?>
                     @foreach($photo as $photos)

                     <div class="col">


                        <a data-fancybox="wk" href="{{url('uploadphoto',$photos->image)}}" class="comon-links-divb05">
                           <figure>
                              <img src="{{url('uploadphoto',$photos->image)}}" alt="pbnm" />
                           </figure>
                        </a>

                     </div>
                     @endforeach



                  </div>
               </div>



            </div>
         </div>



         <!-- =======1st section end========= -->
         <!-- =======2nd section start========= -->




         @endforeach
      </div>

      <!-- =======2nd section end========= -->


   </div>
   </div>
</section>
@endsection