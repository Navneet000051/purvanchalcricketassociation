@extends('frontend.template')
@section('content')
 
<section class="banner-part sub-main-banner float-start w-100">
     
          <div class="baner-imghi">
             <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> ARTICLES</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">/ Articles</li>
                        </ol>
                    </nav>
               </div>
            </div>
          </section>
<section class="float-start w-100  ">

<div class="light-newd-section d-inline-block w-100">
       <div class="container">
          <div class="mindle-heading text-center">
            <h5> What's Trending </h5>
            <h1> Our <span> Latest News </span> </h1>
          </div>
          <span class="bgi-text light-tsext01"> Articles </span>
          <div class="row row cols-1 row-cols-lg-3 g-4 g-lg-5 mt-0 posrt">
             <div class="col">
               <a href="https://www.jubileepost.in/purvanchal-premier-cricket-league-from-6-december/" target="_blank" class="comon-posrt w-100 d-inline-block">
                  <div class="img-boxv w-100 d-inline-block">
                    <figure class="w-100 d-inline-block">
                        <img src="https://www.jubileepost.in/wp-content/uploads/2020/11/thumbnail-2.jpg" alt="pbnm"/>
                    </figure>
                    <span class="daet01">
                    4
                      <small class="d-block"> Nov</small>
                    </span>
                  </div>
                  <div class="parar-delatsy">
                    <h6>Cricket</h6>
                    <h5> पूर्वांचल प्रीमियर क्रिकेट लीग 6 दिसंबर से  </h5>
                    <p class="my-2"> लखनऊ । पूर्वांचल क्रिकेट संघ (पीसीए) के तत्वाधान में आगामी 6 दिसंबर से द्वितीय पूर्वांचल प्रीमियर ट्वेन्टी-20 क्रिकेट लीग प्रतियोगिता का आयोजन 6 दिसंबर से केडी सिंह बाबू स्टेडियम में किया जाएगा ।
</p>
                    
                  </div>
                 
               </a>

               <a href="#" class="comon-posrt right-post0 w-100 d-inline-block mt-4">
                <div class="img-boxv w-100 d-inline-block">
                  <figure class="w-100 d-inline-block">
                      <img src="{{url('frontend/images/shutterstock_1008651946-scaled.jpg')}}" alt="pbnm"/>
                  </figure>
                  <span class="daet01">
                    14
                    <small class="d-block">Jan</small>
                  </span>
                </div>
                <div class="parar-delatsy">
                  <h6>Cricket</h6>
                  <h5> Proin in arcu eu ligula </h5>
                  <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                     <div class="admins d-flex align-items-center">
                        <figure class="m-0 me-2">
                           <img src="{{url('frontend/images/cricket-1642491052.jpg')}}" alt="spbn"/>
                        </figure>
                        <span>Jmanes</span>
                     </div>
                     <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                  </div>
                </div>
               
              </a>


             </div>

             <div class="col">
              <a href="https://newschuski.com/cricket-man-of-the-match-kd-singh-babu-stadium-championships-national-junior-girl-handball/" target="_blank" class="comon-posrt middle-post w-100 d-inline-block">
                 <div class="img-boxv w-100 d-inline-block">
                   <figure class="w-100 d-inline-block">
                       <img src="https://newschuski.com/wp-content/uploads/2021/04/Untitled-9-696x390.jpg" alt="pbnm"/>
                   </figure>
                  
                 </div>
                 <div class="parar-delatsy">
                   <h6>Cricket</h6>
                   <h5> आदित्य के नाबाद शतक से मिनी स्टेडियम की जीत </h5>
                   <i class="fas fa-quote-right"></i>
                   <p class="my-2"> लखनऊ। मैन ऑफ द मैच आदित्य सिंह की शानदार बल्लेबाजी 48 गेंदों पर 15 चौके और दो छक्के की मदद से बनाए गए शानदार नाबाद शतक 103 रनों की मदद से मिनी स्टेडियम राजाजीपुरम ने सद्भावना कप क्रिकेट प्रतियोगिता में सेंट जेम्स कॉलेज को 281 रनों के विशाल अंतर से पराजित कर दिया </p>
                  
                 </div>
                
              </a>

              <a href="https://www.jubileepost.in/dsc-champion-in-winter-challenge-cup-cricket/" target="_blank" class="comon-posrt w-100 d-inline-block my-4">
                <div class="img-boxv w-100 d-inline-block">
                  <figure class="w-100 d-inline-block">
                      <img src="https://www.jubileepost.in/wp-content/uploads/2021/01/1-18-e1610798298434.jpg" alt="pbnm"/>
                  </figure>
                  
                  <span class="daet01">
                    16
                    <small class="d-block">Jan</small>
                  </span>
                </div>
                <div class="parar-delatsy">
                  <h6>Cricket</h6>
                  <h5> विंटर चैलेंज कप क्रिकेट में डीएससी चैम्पियन </h5>
                  <p class="my-2"> लखनऊ । मैन ऑफ द मैच सैफअहसन की शानदार गेंदबाजी 11 रन पर 4 विकेट की मदद से डीएससी इलेवन ने लाइफ केयर विंटर कैप चैलेंज क्रिकेट प्रतियोगिता के फाइनल में एमडीबीजी को 34 रनों से पराजित कर चैंपियन बनने का श्रेय हासिल किया ।</p>
                  
                </div>
               
              </a>

              <a href="#" class="comon-posrt middle-post m-hefigh w-100 d-inline-block ">
                <div class="img-boxv w-100 d-inline-block">
                  <figure class="w-100 d-inline-block">
                      <img src="{{url('frontend/images/zhabi04opycbbyjlmvmg.webp')}}" alt="pbnm"/>
                  </figure>
                 
                </div>
                <div class="parar-delatsy">
                  <h6>Cricket</h6>
                  <h5> Proin in arcu eu ligula vestibulum molestie in vel mi </h5>
                  <i class="fas fa-quote-right"></i>
                  <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                     <div class="admins d-flex align-items-center">
                        <figure class="m-0 me-2">
                           <img src="{{url('frontend/images/manages-st.jpg')}}" alt="spbn"/>
                        </figure>
                        <span>Jmanes</span>
                     </div>
                     <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                  </div>
                </div>
               
              </a>

            </div>


            <div class="col">
              <a href="#" class="comon-posrt right-post0 w-100 d-inline-block">
                 <div class="img-boxv w-100 d-inline-block">
                   <figure class="w-100 d-inline-block">
                       <img src="{{url('frontend/images/np_file_171051.jpg')}}" alt="pbnm"/>
                   </figure>
                   <span class="daet01">
                     14
                     <small class="d-block">Jan</small>
                   </span>
                 </div>
                 <div class="parar-delatsy">
                   <h6>Cricket</h6>
                   <h5> Proin in arcu eu ligula </h5>
                   <div class="user-dela06 w-100 d-flex justify-content-between align-items-center">
                      <div class="admins d-flex align-items-center ">
                         <figure class="m-0 me-2">
                            <img src="{{url('frontend/images/manages-st.jpg')}}" alt="spbn"/>
                         </figure>
                         <span>Jmanes</span>
                      </div>
                      <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                   </div>
                 </div>
                
              </a>

              <a href="https://newschuski.com/sadbhavna-cup-cricket-competition-goel-cricket-academy-mini-stadium-cricket/" target="_blank" class="comon-posrt w-100 d-inline-block mt-4">
                <div class="img-boxv w-100 d-inline-block">
                  <figure class="w-100 d-inline-block">
                      <img src="https://newschuski.com/wp-content/uploads/2021/08/hgjgh-696x375.jpg" alt="pbnm"/>
                  </figure>
                  <span class="daet01">
                    7
                    <small class="d-block">Aug</small>
                  </span>
                </div>
                <div class="parar-delatsy">
                  <h6>Cricket</h6>
                  <h5> गोयल अकादमी और मिनी स्टेडियम संयुक्त विजेता घोषित </h5>
                  <p class="my-2"> लखनऊ। सद्भावना कप क्रिकेट प्रतियोगिता के फाइनल मैच का आयोजन पूर्वोत्तर रेलवे स्टेडियम में किया गया फाइनल मुकाबला गोयल क्रिकेट अकादमी और मिनी स्टेडियम राजाजीपुरम के बीच खेला गया।</p>
                  
                </div>               
              </a>
            </div>
          </div>        
       </div>    
       
    </div>
</section>

@endsection