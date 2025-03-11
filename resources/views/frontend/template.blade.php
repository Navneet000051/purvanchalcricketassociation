<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purvanchal Cricket Association</title>
    <link rel="shortcut icon" href="{{url('frontend/images/logo/favicon.png')}}" type="image/x-icon">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Audiowide&amp;family=Barlow+Condensed:wght@700;800&amp;family=Covered+By+Your+Grace&amp;family=DM+Sans:wght@400;500;700&amp;family=Dancing+Script:wght@500;600;700&amp;family=Jost:wght@200;300;400;500;600;700;800;900&amp;family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500;1,600;1,700;1,800&amp;family=Kaushan+Script&amp;family=Lato:wght@300;900&amp;family=Libre+Franklin:wght@400;500&amp;family=Open+Sans:wght@300;400;500;800&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&amp;family=Quicksand:wght@300;400;500;700&amp;family=Rajdhani:wght@400;500;600;700&amp;family=Raleway:wght@300;400;500;600;700;800&amp;family=Roboto+Condensed:wght@300;400;700&amp;family=Roboto:wght@300;400;500;700&amp;family=Russo+One&amp;family=Saira+Extra+Condensed:wght@400;500&amp;family=Shadows+Into+Light&amp;family=Signika:wght@300;400;500;600;700&amp;family=Sora:wght@300;600;700;800&amp;family=Space+Grotesk:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="{{url('frontend/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="../../../../cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
  </head>
  <style>
    .purvanchal_logo .navbar-brand img {
      max-width: 175px;
    }
    .adtext_cricekt_association {
      font-size: 18px;
      font-weight: 500;
      margin: 0px 0px;
      padding: 5px 0px;
    }
    .border_top_pcb_cricket {
      border-top: 2px solid red;
      width: 100%;
      padding: 10px 0px;
    }
    .nav-item {
      padding: 0px 15px;
    }
    @media only screen and (max-width:768px) {
      .border_top_pcb_cricket {
        padding: 0px;
      }
      .adtext_cricekt_association {
        font-size: 11px;
        line-height: 2;
      }
      .purvanchal_logo .navbar-brand img {
        max-width: 175px;
      }
    }
    @media only screen and (max-width: 600px) {
      .adtext_cricekt_association {
        font-size: 10px;
      }
    }
  </style>
  <body>
    <header class="float-start w-100">
      <nav class="navbar navbar-expand-lg navbar-light nav_bar_pcb_wrap" style="flex-wrap: wrap;">
        <div class="container d-block">
          <div class="row justify-content-between">
            <div class="col-md-4 col-lg-3 purvanchal_logo text-center align-self-center">
              <a class="navbar-brand py-0" href="index">
                <img src="{{url('frontend/images/logo/logo.jpg')}}" alt="logo" class="img-fluid" />
                <p>CIN No : U92410UP2019NPL122877</p>
              </a>
            </div>
            <div class="col-md-8 col-lg-9 Association_nametext align-self-center text-center ">
              <div class=" purvanchal_logotext text-center">Purvanchal Cricket Association
              </div>
              <div class="company_regd_act_text"> A Company Regd. Under Section 8 Of The Compaies Act, 2013</div>
              <div class="adtext_cricekt_association">
                <b>Register Add:</b> C-19/6 Near Badshah Bagh Colony, Lallapur, Varanasi (U.P.) 221010 <br>
                <b>Additional correspondence Add:</b> 5/194, Vikas Nagar, Lucknow (U.P.) <br>
                <b>Phone:</b> 9415159376, 9305880457, 9415086657, 8115570371, 8115117332<br>
                <b>Email:</b> Purvanchalcricketassociation@gmail.com
              </div>
            </div>
          </div>
        </div>
        <div class="border_top_pcb_cricket">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item {{Request::is('home') ? 'show' : ''}}">
                <a class="nav-link" aria-current="page" href="{{url('home')}}">Home</a>
              </li>
              <li class="nav-item dropdown  {{Request::is('aims_object') || Request::is('pca_mission') || Request::is('pca_constitution') || Request::is('districts') ? 'show' : ''}}">
                <a class="nav-link ">About</a>
                <div class="dropdown-content ">
                  <ul>
                    <li class="{{Request::is('aims_object') ? 'active' : '' }} "> <a class="nav-link" href="{{url('aims_object')}}">Aim & Object</a></li>
                    <li class="nav-item {{Request::is('pca_mission') ? 'active' : ''}}"> <a class="nav-link " href="{{url('pca_mission')}}">PCA Mission</a></li>
                    <li class="nav-item {{Request::is('pca_constitution') ? 'active' : ''}}"> <a class="nav-link" href="{{url('pca_constitution')}}">PCA Constitution</a></li>
                    <li class="nav-item {{Request::is('districts') ? 'active' : ''}}"> <a class="nav-link" href="{{url('districts')}}">Districts</a></li>
                    <li> <a class="nav-link " href="">National Championship</a></li>
                    <li> <a class="nav-link" href="">Calendar</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown {{Request::is('news_cutting') || Request::is('news_videos') || Request::is('videos') || Request::is('photos') ? 'show' : ''}}">
                <a class="nav-link ">GALLERY</a>
                <div class="dropdown-content">
                  <ul>
                    <li class="nav-item{{Request::is('news_cutting') ? 'active' : ''}}"> <a class="nav-link" href="{{url('news_cutting')}}">News Cutting</a></li>
                    <li class="nav-item{{Request::is('news_videos') ? 'active' : ''}}"> <a class="nav-link" href="{{url('news_videos')}}">News Video</a></li>
                    <li class="nav-item{{Request::is('videos') ? 'active' : ''}}"> <a class="nav-link" href="{{url('videos')}}">Media</a></li>
                    <li class="nav-item{{Request::is('photos') ? 'active' : ''}}"> <a class="nav-link" href="{{url('photos')}}">Photos</a></li>

                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link ">TOURNAMENTS</a>
                <div class="dropdown-content">
                  <ul>
                    <li> <a class="nav-link" href="">Domestic</a></li>
                    <li> <a class="nav-link" href="">National</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item {{Request::is('pca_officials') ? 'show' : ''}}">
                <a class="nav-link" href="{{url('pca_officials')}}">PCA OFFICIALS</a>
              </li>
              <li class="nav-item dropdown {{Request::is('mens_team') || Request::is('womens_team') ? 'show' : ''}}">
                <a class="nav-link ">PCA CRICKET TEAM</a>
                <div class="dropdown-content">
                  <ul>
                    <li> <a class="nav-link" href="#">Sr. Men’s Team</a></li>
                    <li> <a class="nav-link" href="#">Sr. Women’s Team</a></li>
                    <li> <a class="nav-link " href="">Under 23</a></li>
                    <li> <a class="nav-link " href="">Under 19</a></li>
                    <li> <a class="nav-link" href="">Under 16</a></li>
                    <li> <a class="nav-link " href="">Under 14</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item {{Request::is('articles') ? 'show' : ''}}">
                <a class="nav-link" aria-current="page" href="{{url('articles')}}">Articles</a>
              </li>
            </ul>
          </div>
        </div>
        <button type="button" class="btn bar-btn-links d-lg-none d-block" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmobile">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
              <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
            </svg>
          </span>
        </button>
      </nav>
    </header>
    <!-- End Page-content -->
    @yield('content')
    <footer class="float-start w-100">
      <div class="container">
        <div class="row g-lg-5 mt-0">
          <div class="col-lg-5">
            <div class="logo-about mt-3 mt-lg-0 d-md-flex align-items-start justify-content-between">
              <a href="#" class="col-lg-4">
                <img src="{{url('frontend/images/logo/footer-logo.png')}}" alt="logo">
              </a>
              <p class="col-lg-8 ms-md-4 mt-4 mt-md-0 text-white spt align-self-center"> A Company Regd. under section 8 of the companies act, 2013 </p>
            </div>
            <div class="support-section mt-4">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4 g-lg-5">
                <div class="col">
                  <div class="d-flex align-items-center">
                    <figure class="m-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                      </svg>
                    </figure>
                    <div class="comnlink ms-3">
                      <h6 class="m-0"> CIN NO </h6>
                      <a href="#">U92410UP2019NPL122877 </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="d-flex align-items-center">
                    <div class="get-intouch-div  d-flex align-items-center justify-content-between">
                      <ul>
                        <li>
                          <a href="https://www.facebook.com/purvanchalcricketassociation/" class="btn btn-socal-1" target="_blank"><span>FOLLOW US ON FACEBOOK</span> </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row row-cols-1 row-cols-sm-2 mt-4 mt-lg-0">
              <div class="col d-grid justify-content-lg-center">
                <div class="right-fgo">
                  <h4 class="text-white"> Quick Link</h4>
                  <ul class="mt-4">
                    <li>
                      <a href=" "> Media </a>
                    </li>
                    <li>
                      <a href="{{url('videos')}}"> Videos </a>
                    </li>
                    <li>
                      <a href="{{url('photos')}}"> Photos </a>
                    </li>
                    <li>
                      <a href="{{url('contact')}}"> Contact </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="right-fgo">
                  <h4 class="text-white mt-0">
                    Contact Details
                  </h4>
                  <div class="support-section mt-4">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4 g-lg-5">


                      <div class="col-12">
                        <div class="d-flex align-items-center">

                          <figure class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"></path>
                            </svg>
                          </figure>
                          <div class="comnlink ms-3">
                            <h6 class="m-0"> CONTACT US </h6>
                            <a href="#"> +91 73099 94326 </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center">
                          <figure class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                              <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z"></path>
                            </svg>
                          </figure>
                          <div class="comnlink ms-3">
                            <h6 class="m-0"> EMAIL ID </h6>
                            <a href="#"> purvanchalcricketassociation@gmail.com </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
      </div>iv class="footer-div1 mt-4">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 text-center text-lg-start gy-4 gy-lg-0 justify-content-center justify-content-lg-between">
          <div class="col">
            <p class="text-white"> Copyright © 2023 purvanchalcricketassociation.com, All Rights Reserved. Developed by <a class="copy ms-0" href="https://bfcsofttech.com/" target="_blank">BFC Softtech</a> </p>
          </div>
          <div class="col d-grid justify-content-lg-end">
            <ul>
              <li>
                <a href="#"> Grievance </a>
                <a href="{{url('guidelines')}}"> Guidelines </a>
                <a href="{{url('rules_game')}}">Rule of the Game </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
      <div class="offcanvas offcanvas-end" id="offcanvasRightmobile">
        <div class="offcanvas-header py-0">
          <button type="button" class="close-menu mt-4" data-bs-dismiss="offcanvas" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
            </svg>
          </button>
        </div>
        <div class="offcanvas-body">

          <div class="head-contact d-block d-lg-none">
            <a class="navbar-brand py-0 d-flex logo-side" href="index">
              <img src="{{url('frontend/images/logo/logo.jpg')}}" alt="logo" class="img-fluid" />
              <div class="text-uppercase align-self-center text-green logo-text">Purvanchal Cricket Association</div>
            </a>

            <div class="mobile-menu-sec mt-3">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link ">About</a>
                  <div class="dropdown-content">
                    <ul>
                      <li class="{{Request::is('aims_object') ? 'active' : '' }} "> <a class="nav-link" href="{{url('aims_object')}}">Aim & Object</a></li>
                      <li class="nav-item {{Request::is('pca_mission') ? 'active' : ''}}"> <a class="nav-link " href="{{url('pca_mission')}}">PCA Mission</a></li>
                      <li class="nav-item {{Request::is('pca_constitution') ? 'active' : ''}}"> <a class="nav-link" href="{{url('pca_constitution')}}">PCA Constitution</a></li>
                      <li class="nav-item {{Request::is('districts') ? 'active' : ''}}"> <a class="nav-link" href="{{url('districts')}}">Districts</a></li>
                      <li> <a class="nav-link " href="">National Championship</a></li>
                      <li> <a class="nav-link" href="">Calendar</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link ">GALLERY</a>
                  <div class="dropdown-content">
                    <ul>
                      <li class="nav-item{{Request::is('news_cutting') ? 'active' : ''}}"> <a class="nav-link" href="{{url('news_cutting')}}">News Cutting</a></li>
                      <li class="nav-item{{Request::is('news_videos') ? 'active' : ''}}"> <a class="nav-link" href="{{url('news_videos')}}">News Video</a></li>
                      <li class="nav-item{{Request::is('videos') ? 'active' : ''}}"> <a class="nav-link" href="{{url('videos')}}">Media</a></li>
                      <li class="nav-item{{Request::is('photos') ? 'active' : ''}}"> <a class="nav-link" href="{{url('photos')}}">Photos</a></li>

                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link ">TOURNAMENTS</a>
                  <div class="dropdown-content">
                    <ul>
                      <li> <a class="nav-link" href="">Domestic</a></li>
                      <li> <a class="nav-link" href="about">National</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item {{Request::is('pca_officials') ? 'show' : ''}}">
                  <a class="nav-link" href="{{url('pca_officials')}}">PCA OFFICIALS</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link ">PCA CRICKET TEAM</a>
                  <div class="dropdown-content">
                    <ul>
                      <li> <a class="nav-link" href="#">Sr. Men’s Team</a></li>
                      <li> <a class="nav-link" href="#">Sr. Women’s Team</a></li>
                      <li> <a class="nav-link" href="">Under 23</a></li>
                      <li> <a class="nav-link" href="">Under 19</a></li>
                      <li> <a class="nav-link" href="">Under 16</a></li>
                      <li> <a class="nav-link" href="">Under 14</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item {{Request::is('articles') ? 'show' : ''}}">
                  <a class="nav-link" aria-current="page" href="{{url('articles')}}">Articles</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
    <script src="{{url('custom_js/jquery.validate.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('frontend/js/custom.min.js')}}"></script>

    @yield('external-js')
    <script src="../../../../cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="../../../../cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../../../cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="../../../../cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

  </body>
  </html>