@extends('frontend.template')
@section('content')

<section class="banner-part sub-main-banner float-start w-100">

    <div class="baner-imghi">
        <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner" />
    </div>

    <div class="sub-banner">
        <div class="container">
            <h1 class="text-center"> Matches</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">/Matches</li>
                </ol>
            </nav>
        </div>
    </div>





</section>

<section class="float-start w-100 body-part mtches-divbnh01 pt-0">

    <div class="next-matches d-inline-block w-100">
        <div class="container">

            <div class="mindle-heading text-center">

                <h5> Match </h5>
                <h1> Next <span> Match </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Matches</span>

            <div class="comon-results-div">
                <div class="leag-name text-center">
                    <h2>United FC Cup </h2>


                </div>
                <div class="bodyu-divbn">
                    <h4 class="text-center text-white"> <span> Roethlon Dan </span> <span class="text-white mx-4"> <i class="fas fa-minus"></i> </span> <span> James Rider </span> </h4>
                    <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                    <h6 class="text-center text-white"> 06:00Court 01 </h6>
                    <h3 class="text-white text-center mt-2 justify-content-center">
                        <span class="text-center"> 160/5

                        </span>
                        <span>:</span>
                        <span class="text-center"> 152/5

                        </span>
                        <b class="d-block">20 Over</b>
                    </h3>

                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="club-items d-flex align-items-center">
                                <figure class="m-0">
                                    <img src="{{url('frontend/images/Vector-Smart-Object1.png')}}" alt="bn" />
                                </figure>
                                <h5 class="ms-3"> Roethlon
                                    <span class="d-block">South America</span>
                                </h5>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="d-none d-lg-block">
                                <div class="vds-resut text-center">
                                    <div class="golas-divb mb-2">
                                        <h3>02 : 01</h3>
                                    </div>
                                    <div class="watch-div">
                                        <a href="#" class="btn btn-wtch1">
                                            <i class="fas fa-play"></i> Match Highligt
                                        </a>
                                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-lg-none">
                                <h3 class="text-white text-center">VS</h3>
                            </div>

                        </div>

                        <div class="col-5">
                            <div class="club-items d-flex align-items-center">
                                <figure class="m-0">
                                    <img src="{{url('frontend/images/6288d1fe92d55dad82ab2207.png')}}" alt="bn" />
                                </figure>
                                <h5> Roethlon
                                    <span class="d-block">South America</span>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="d-lg-none d-block">
                        <div class="vds-resut text-center my-4">
                            <div class="golas-divb mb-2">
                                <h3>02 : 01</h3>
                            </div>
                            <div class="watch-div">
                                <a href="#" class="btn btn-wtch1">
                                    <i class="fas fa-play"></i> Match Highligt
                                </a>
                                <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </div>

    <div class="matches-seduels d-inline-block w-100">
        <div class="container">

            <div class="mindle-heading text-center">

                <h5> Schedule </h5>
                <h1> Match <span> Schedule </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Schedule</span>



            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item ms-lg-0" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab">Series</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab">Laegue</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab">International</button>
                </li>
            </ul>


            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                    <table id="matchess" class="table table-striped order-column dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Fixtures</th>
                                <th>Date</th>
                                <th>Stadium</th>
                                <th>Location</th>
                                <th>Time</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td><a href="#" class="btn btn-get"> Book Ticket </a></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                    <table id="matchess2" class="table table-striped order-column dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Fixtures</th>
                                <th>Date</th>
                                <th>Stadium</th>
                                <th>Location</th>
                                <th>Time</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td><a href="#" class="btn btn-get"> Book Ticket </a></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel">
                    <table id="matchess3" class="table table-striped order-column dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Fixtures</th>
                                <th>Date</th>
                                <th>Stadium</th>
                                <th>Location</th>
                                <th>Time</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td><a href="#" class="btn btn-get"> Book Ticket </a></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="d-flex fetuexr align-items-center">
                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons01.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> JC Bull</span>
                                        </div>

                                        <span class="mx-3 vs-0">VS</span>

                                        <div class="name-team d-flex align-items-center">
                                            <span>
                                                <span class="sm-iconj">
                                                    <img src="{{url('frontend/images/mt-1119-home-icons04.png')}}" alt="je" />
                                                </span>
                                            </span>
                                            <span> FC Nets</span>
                                        </div>
                                    </div>
                                </td>
                                <td>01-03-2023</td>
                                <td>Jaharbar</td>
                                <td>New York</td>
                                <td>1:30PM</td>
                                <td>
                                    <a href="#" class="btn btn-get"> Book Ticket </a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>


</section>
@endsection