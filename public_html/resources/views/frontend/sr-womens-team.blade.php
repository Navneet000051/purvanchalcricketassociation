@extends('frontend.template')
@section('content')
<section class="banner-part sub-main-banner float-start w-100">
     
          <div class="baner-imghi">
             <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> Sr. Women’s Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">/Sr. Women’s Team</li>
                        </ol>
                    </nav>
               </div>
            </div>


</section>

<section class="float-start w-100 body-part pt-0">
   
    
    <div class="palyerspage d-inline-block w-100">
        <div class="container">
             <div class="mindle-heading text-center">
                <h5> Players </h5>
                <h1> Sr. Women’s  <span> Team </span> </h1>
              </div>
              <span class="bgi-text light-tsext01"> Players </span>

              <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 g-lg-5 mt-0 mt-lg-4">
                <div class="col">
                   <a href="{{url('players_details')}}" class="crm-teams01">
                       <figure>
                           <img src="{{url('frontend/images/t5.jpg')}}" alt="teams01"/>
                       </figure>
                       <div class="design">
                       <h5> Sneezy dane</h5>
                       <p> Offensive Line </p>
                      </div>
                   </a>
                </div>
                <div class="col">
                   <a href="{{url('players_details')}}" class="crm-teams01">
                       <figure>
                           <img src="{{url('frontend/images/t4.jpg')}}" alt="teams01"/>
                       </figure>
                       <div class="design">
                       <h5> Sleepy dane</h5>
                       <p> Offensive Line </p>
                      </div>
                   </a>
                </div>
                <div class="col">
                   <a href="{{url('players_details')}}" class="crm-teams01">
                       <figure>
                          <img src="{{url('frontend/images/hj.webp')}}" alt="teams01">
                       </figure>
                       <div class="design">
                       <h5> Bashful dane</h5>
                       <p> Offensive Line </p>
                      </div>
                   </a>
                </div>
                <div class="col">
                   <a href="{{url('players_details')}}" class="crm-teams01">
                       <figure>
                          <img src="{{url('frontend/images/t8.jpg')}}" alt="teams01">
                       </figure>
                       <div class="design">
                       <h5> Grumpy dane</h5>
                       <p> Offensive Line </p>
                      </div>
                   </a>
                </div>
                <div class="col">
                   <a href="{{url('players_details')}}" class="crm-teams01">
                       <figure>
                          <img src="{{url('frontend/images/t6.jpg')}}" alt="teams01">
                       </figure>
                       <div class="design">
                       <h5> James dane</h5>
                       <p> Offensive Line </p>
                      </div>
                    </a>
                </div>
  
                <div class="col">
                   <a href="{{url('players_details')}}" class="crm-teams01">
                       <figure>
                          <img src="{{url('frontend/images/t7.jpg')}}" alt="teams01">
                       </figure>
                       <div class="design">
                       <h5> James dane</h5>
                       <p> Offensive Line </p>
                      </div>
                   </a>
                </div>
  
  
              </div>
        </div>
    </div>


</section>
@endsection