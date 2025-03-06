@extends('frontend.template')
@section('content')
 
<section class="banner-part sub-main-banner float-start w-100">
     
          <div class="baner-imghi">
             <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center">PCA Constitution</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">/ PCA Constitution</li>
                        </ol>
                    </nav>
               </div>
            </div>
</section>
<section class="float-start w-100 body-part aim">
    <div class="container mb-5">
    <div class="row">
    <div class="col-12 text-justify">

    <h4 class="text-green">The Federation Comprised Of:</h4>
<ul>
    <li>Hon’y President</li>
    <li>Hon’y Sr.Vice President</li>
    <li>Hon’y Founder Secretary General</li>
    <li>One Hon’y Joint Secretary</li>
    <li>One Hon’y Treasurer</li>
    <li>5 CEOs ( One from each zone for 1 Year) *</li>
    <li>5 Vice Presidents (One from each zone for 1 Year) *</li>
    <li>Full Members</li>
    <li>Associate Members</li>
</ul>



</div>
</div>
</div>
</section>
@endsection