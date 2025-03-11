@extends('frontend.template')
@section('content')
<style>
  .our-small-details {
    display: grid;
    align-items: center;
    width: 100%;
    margin-top: 80px;
    padding: 50px 0;
    height: 292px;
    position: relative;
    overflow: hidden;
  }

  .our-small-details .bg-small-back02 img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  .our-small-details .bg-small-back02 {
    position: absolute;
    left: 0;
    right: 0;
    top: -100px;
    height: 800px;
    display: inline-block;
    width: 100%;
  }
</style>
<section class="float-start w-100 banner-part">
  <div class="slider-banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{url('frontend/images/photos/1.jpg')}}" alt="images not found">


          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInDown animated"> <span class="d-block">

                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/c2.png')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/c4.png')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/2.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/1_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/2_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/3_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/4_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/5_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/6_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/7_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/8_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/9_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/10_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/11_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>
                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/12_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>
                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/13_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>
                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/14_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>
                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/15_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/16_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/17_slider.jpg')}}" alt="images not found">

          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/18_slider.jpg')}}" alt="images not found">
          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>

                    <p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{url('frontend/images/photos/19_slider.jpg')}}" alt="images not found">
          <div class="cover">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-content">
                    <h1 class="fadeInUp animated">
                      <span class="d-block">
                      </span>
                    </h1>
                    <p>
                    </p>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="calltotop-area">
  <div class="container-fluid ">
    <div class="callto-section">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 call-left no-padding px-0">
          <div class="news blue d-flex">
            <span class="mw-110">Latest News</span><span class="text1">
              <marquee onmouseover="this.stop();" onmouseout="this.start();"> <a href="" class="text-white">No Updates!</a>
              </marquee>
            </span>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="float-start w-100 body-part pt-0">
  <div class="about-sec-home">
    <span class="bgi-text light-tsext01"> About</span>
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-2">
        <div class="col text-abouy">

          <h5>Our History</h5>
          <h1> About Our <span> Association </span></h1>
          <p class="my-3"> The primary objective of the Purvanchal
            Cricket Association (PCA) is to provide a comprehensive online platform for
            cricket enthusiasts, players, coaches, officials, and fans to access information,
            resources, and services related to cricket. The association aims to promote the
            sport, facilitate communication and collaboration among stakeholders, and
            enhance the overall cricketing experience.</p>

          <a href="{{url('about')}}" class="btn btn-about">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
              </svg>
            </span>About More</a>
        </div>
        <div class="col">
          <div class="about-1imgn">
            <img src="{{url('frontend/images/pngaaa.com-1165094.png')}}" alt="bnm" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="our-small-details">
    <div class="container">
      <div class="">
        <div class="col d-lg-grid justify-content-lg-end">
          <div class="comon-divbn d-md-flex align-items-center">
            <figure>
              <img src="{{url('frontend/images/demo12.png')}}" alt="pnbm" />
            </figure>
            <div class="right-dibvb">
              <h2><?php echo $count + 10032556; ?></h2>

              <h6>Member Views</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-small-back02">
      <img src="{{url('frontend/images/parallax-1.png')}}" alt="sportsfbn" />
    </div>
  </div>
  <div class="mediasection d-inline-block w-100">
    <div class="container">
      <div class="mindle-heading text-center">
        <h5> Gallery </h5>
        <h1> Our <span> Latest Media </span> </h1>
      </div>
      <span class="bgi-text light-tsext01"> Gallery </span>
      <div class="row row-cols-2 row-cols-lg-4 mt-0 g-4 mt-3">
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/photos/new.jpeg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/photos/new.jpeg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/photos/new1.jpeg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/photos/new1.jpeg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/photos/new2.jpeg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/photos/new2.jpeg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/photos/new3.jpeg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/photos/new3.jpeg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/photos/c2.png')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/photos/c2.png')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/photos/c4.png')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/photos/c4.png')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new1.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new1.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new2.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new2.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new3.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new3.jpg')}}" alt="pbnm" />

            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new4.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new4.jpg')}}" alt="pbnm" />

            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new5.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new5.jpg')}}" alt="pbnm" />

            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new7.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new7.jpg')}}" alt="pbnm" />

            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/new8.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/new8.jpg')}}" alt="pbnm" />

            </figure>
          </a>
        </div>


        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/1.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/1.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>


        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/2.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/2.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>


        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/3.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/3.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>


        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/4.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/4.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/5.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/5.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/6.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/6.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/7.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/7.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/8.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/8.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/9.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/9.jpg')}}" alt="pbnm" />

            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/10.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/10.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/11.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/11.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/12.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/12.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/17.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/17.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/14.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/14.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/13.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/13.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/15.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/15.jpg')}}" alt="pbnm" />
              <!--<figcaption>-->
              <!--  FGC CUP 2022-->
              <!--</figcaption>-->
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/16.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/16.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/21.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/21.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/18.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/18.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/19.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/19.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/20.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/20.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/22.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/22.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/23.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/23.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>

        <div class="col">
          <a data-fancybox="wk" href="{{url('frontend/images/homemedia/24.jpg')}}" class="comon-links-divb05">
            <figure>
              <img src="{{url('frontend/images/homemedia/24.jpg')}}" alt="pbnm" />
            </figure>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="news-sectiondiv d-inline-block w-100">
    <div class="container">
      <div class="mindle-heading text-center">
        <h5> Devoted </h5>
        <h1> Meet Our <span> Members </span> </h1>
      </div>
      <span class="bgi-text light-tsext01"> Member</span>

      <div class="team-membern owl-carousel owl-theme mt-5">
        @foreach($official_data as $key => $value)
        <a href="#" class="crm-teams01">
          <figure>
            <img src="{{url('uploadsAmend',$value->image)}}" alt="teams01" />
          </figure>
          <div class="design">
            <h5> {{$value->name}}</h5>
            <p> {{$value->designation}} </p>
          </div>
        </a>
        @endforeach
      </div>
    </div>
    <div class="big-headerpic">
      <img src="{{url('frontend/images/ballsk.png')}}" alt="ho" />
    </div>
  </div>
  <div class="light-newd-section d-inline-block w-100">
    <div class="container">
      <div class="mindle-heading text-center">
        <h5> What's Trending </h5>
        <h1> Our <span> Latest Jersey </span> </h1>
      </div>
      <span class="bgi-text light-tsext01"> Articles </span>
      <div class="row  cols-1 row-cols-lg-3 g-4 g-lg-5 mt-0 posrt">

        <div class="col-12 col-md-6 col-lg-4">
          <div class="img-boxv w-100 d-inline-block">
            <figure class="w-100 d-inline-block">
              <img src="https://purvanchalcricketassociation.com/frontend/images/dress/1.jpg" alt="pbnm" />
            </figure>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="img-boxv w-100 d-inline-block">
              <figure class="w-100 d-inline-block">
                <img src="https://purvanchalcricketassociation.com/frontend/images/dress/2.jpg" alt="pbnm" />
              </figure>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="img-boxv w-100 d-inline-block">
              <figure class="w-100 d-inline-block">
                <img src="https://purvanchalcricketassociation.com/frontend/images/dress/3.jpg" alt="pbnm" />
              </figure>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">

            <div class="img-boxv w-100 d-inline-block">
              <figure class="w-100 d-inline-block">
                <img src="https://purvanchalcricketassociation.com/frontend/images/dress/4.jpg" alt="pbnm" />
              </figure>

            </div>



          </div>
          <div class="col-12 col-md-6 col-lg-4">

            <div class="img-boxv w-100 d-inline-block">
              <figure class="w-100 d-inline-block">
                <img src="https://purvanchalcricketassociation.com/frontend/images/dress/5.jpg" alt="pbnm" />
              </figure>

            </div>



          </div>
          <div class="col-12 col-md-6 col-lg-4">

            <div class="img-boxv w-100 d-inline-block">
              <figure class="w-100 d-inline-block">
                <img src="https://purvanchalcricketassociation.com/frontend/images/dress/6.jpg" alt="pbnm" />
              </figure>

            </div>



          </div>
          <div class="col-12 col-md-6 col-lg-4">

            <div class="img-boxv w-100 d-inline-block">
              <figure class="w-100 d-inline-block">
                <img src="https://purvanchalcricketassociation.com/frontend/images/dress/7.jpg" alt="pbnm" />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
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

                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/1.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/1.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/2.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/2.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/3.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/3.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/4.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/4.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/5.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/5.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/6.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/6.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/7.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/7.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/8.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/8.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/9.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/9.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/10.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/10.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/11.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/11.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/12.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/12.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/13.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/13.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/14.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/14.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/15.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/15.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/16.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/16.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/17.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/17.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                  <div class="col shadowc">
                    <a data-fancybox="wk" href="{{url('frontend/images/homenews/18.jpg')}}" class="comon-links-divb05">
                      <figure>
                        <img src="{{url('frontend/images/homenews/18.jpg')}}" alt="pbnm" />

                      </figure>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- =======1st section end========= -->

        </div>
      </div>
    </section>
    <div class="sponcer-logo d-inline-block w-100">
      <div class="rtck-img">
        <img src="{{url('assets/images/favpng_cricket-bats-kookaburra-sport-bag-cricket-clothing-and-equipment.png')}}" alt="bnm" />
      </div>
      <div class="container">
        <div class="mindle-heading text-center">
          <h1> Our <span> Units </span> </h1>
        </div>
        <span class="bgi-text light-tsext01"> Districts </span>
        <div class="sponj-slide owl-carousel owl-theme mt-5">
          @foreach($unit_data as $key =>$value)
          <div class="corm-iteml">

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

        </div>

      </div>

    </div>

</section>
<script>
  function Random() {
    let value = 0;
    const day = new Date().getDay()
    let itsRun = localStorage.getItem("ItsRun");
    if (!itsRun) {
      localStorage.setItem("ItsRun", "False");
      itsRun = "False";
    }

    if (day === 1 && itsRun == "False") {
      localStorage.setItem("ItsRun", "True");
      value = Math.floor(Math.random() * (400000 - 300000 + 1) + 300000);
    } else if (day != 1) {
      localStorage.setItem("ItsRun", "False");
    }
    return value;
  }

  let randomValue = Random()
  let another = 0;
  let sum = randomValue + another;



  if (localStorage.getItem("Mon")) {
    let existingValue = parseInt(localStorage.getItem("Mon"));
    existingValue += sum;
    console.log(existingValue)


    localStorage.setItem("Mon", existingValue.toString());
    document.getElementById("count0").innerText = existingValue;


  } else {

    localStorage.setItem("Mon", sum.toString());
    document.getElementById("count0").innerText = sum;

  }
</script>

@endsection