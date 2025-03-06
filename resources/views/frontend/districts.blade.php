@extends('frontend.template')
@section('content')
<section class="banner-part sub-main-banner float-start w-100">
  <div class="baner-imghi">
    <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner"/>
  </div>
  <div class="sub-banner">
    <div class="container">
      <h1 class="text-center"> Districts</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">/Districts</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<section class="float-start w-100 body-part py-5 ">
  <div class="container">
    <div class="row">
          @foreach($unit_data as $key =>$value)
      <div class="col-4 ">
        <div class="shadowd px-4 py-3">
            <div class="district-name">
              <p>{{$value->district}}</p>
            </div>
            <h4>{{$value->name}}</h4>
            <p><b>Secretary : </b> <span class="ps-2">{{$value->secretary}}</span></p>
            <p><b>Mobile No : </b> <span class="ps-2">{{$value->mobileno}}</span></p>
            <hr>
            <p><b>President : </b> <span class="ps-2">{{$value->president}}</span></p>
            <p><b>Mobile No : </b> <span class="ps-2">{{$value->president_mobile}}</span></p>
        </div>
      </div>
        @endforeach
      <!--<div class="col-4 ">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Bhadohi</p>-->
      <!--    </div>-->
      <!--    <h4>Cricket association of sant Ravidas Nagar bhadohi</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Binju Yadav</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Jay Prakash Yadav</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9648694922</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 ">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Meerzapur</p>-->
      <!--    </div>-->
      <!--    <h4>Cricket association of meerzapur</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Dilip Gupta</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">6386648478</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Sanjay Gupta</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9936028124</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Ballia</p>-->
      <!--    </div>-->
      <!--    <h4>Ballia cricket association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Govind Kashyap</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">7678530952</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Satish Sharma</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9711908508</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Pratapgarh</p>-->
      <!--    </div>-->
      <!--    <h4>Cricket association of pratapgarh</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Sahablaal Yadav</span></p>-->
          
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Rajendra Prasad Yadav</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9839189638</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Kannauj</p>-->
      <!--    </div>-->
      <!--    <h4>Kannauj cricket association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Gaurav Shukla</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9873799580</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Akash Kumar</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9650317302</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Jaunpur</p>-->
      <!--    </div>-->
      <!--    <h4>Jaunpur cricket association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Vinod Yadav</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">8960966681</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Ramnarayan Yadav</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">8948234601</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Lalitpur</p>-->
      <!--    </div>-->
      <!--    <h4>Lalitpur cricket association.</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2">Anmol Jain</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">7007332745</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Satrughan Yadav</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9795128693</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Hathras</p>-->
      <!--    </div>-->
      <!--    <h4>HATHRAS CRICKET ASSOCIATION</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Dinesh Kumar</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9045461400</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Sujit Pachauri</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9837053433</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Etah</p>-->
      <!--    </div>-->
      <!--    <h4>District Cricket Assosiation (Etah)</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Akhil Dixit</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">7417657265</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Swagat Pachauri</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9897541157</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Kasganj</p>-->
      <!--    </div>-->
      <!--    <h4>Kasganj Cricket Association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Chetan Kumar</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9758429011</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Alka Kumari</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">6397882598</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Mau</p>-->
      <!--    </div>-->
      <!--    <h4>Cricket Association Mau</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Nasiruddin</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9260929778</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Harinath Singh</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">7007539209</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Gonda</p>-->
      <!--    </div>-->
      <!--    <h4>Gonda cricket association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Rashid Khan</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9918507152</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Vivek</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9415772723</span></p>-->
      <!--  </div>-->
      <!--</div>-->
     
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Shravasti</p>-->
      <!--    </div>-->
      <!--    <h4>Shravasti Cricket Association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Rahul Saxena</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">8299046410</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Deepmala Saxena</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9336005049</span></p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Amroha</p>-->
      <!--    </div>-->
      <!--    <h4> District  Cricket Association Amroha</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Mohammed Ali </span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9720244786</span></p>-->
      <!--    <hr>-->
      <!--    <p><b>President : </b> <span class="ps-2">Khurram Azad Khan</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9690680001</span></p>-->
          
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="col-4 mt-4">-->
      <!--  <div class="shadowd px-4 py-3">-->
      <!--    <div class="district-name">-->
      <!--      <p>Balrampur</p>-->
      <!--    </div>-->
      <!--    <h4>Balrampur Cricket Association</h4>-->
      <!--    <p><b>Secretary : </b> <span class="ps-2"> Mohammed Imran</span></p>-->
      <!--    <p><b>Mobile No : </b> <span class="ps-2">9580322505</span></p>-->
          
      <!--  </div>-->
      <!--</div>-->
    </div>
  </div>
</section>
@endsection