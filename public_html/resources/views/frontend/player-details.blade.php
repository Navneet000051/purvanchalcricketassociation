@extends('frontend.template')
@section('content')
 
<section class="banner-part sub-main-banner float-start w-100">
     
          <div class="baner-imghi">
             <img src="{{url('frontend/images/sub-banner01.jpg')}}" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> Player Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">/Player Details</li>
                        </ol>
                    </nav>
               </div>
            </div>

</section>

<section class="float-start w-100 body-part pt-0 pb-5">
   
     <div class="plyaers-divbn-details d-inline-block w-100 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <figure class="py-us">
                        <img src="{{url('frontend/images/istockphoto-1200677760-612x612.jpg')}}" alt="pnnm"/>
                    </figure>
                    <div class="tesmpa">
                        <img src="{{url('frontend/images/logo-3-1.png')}}" alt="amnj"/>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="details-platyd">
                        <h1 class="mt-0">Jamemns Dan </h1>
                        <h3 class="mt-2">Class Of 2022 / OF </h3>

                        <div class="information-crm mt-3">
                            <h4> Player Infomation </h4>
                            <ul class="mt-4">
                               <li>
                                <span class="dert"> Height</span>
                                <span>6'3</span>
                               </li>
                               <li>
                                <span class="dert"> Weight </span>
                                <span>6'3</span>
                               </li>

                               <li>
                                <span class="dert"> Weight </span>
                                <span>6'3</span>
                               </li>
                               <li>
                                <span class="dert"> Born </span>
                                <span>1990, USA</span>
                               </li>
                               <li>
                                <span class="dert"> Nationality </span>
                                <span>USA</span>
                               </li>
                               <li>
                                <span class="dert"> Exprienced </span>
                                <span>5 Years</span>
                               </li>
                            </ul>
                        </div>

                        
                    </div>

                </div>
            </div>

            <div class="career-div01">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          2016-2022 Bating Season 
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="table-sectionss table-responsive">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Team</th>
                                        <th scope="col">AB</th>
                                        <th scope="col">R</th>
                                        <th scope="col">H</th>
                                        <th scope="col">RBI</th>
                                        <th scope="col">2B</th>
                                        <th scope="col">3B</th>
                                        <th scope="col">LOB</th>
                                        <th scope="col">G</th>
                                        <th scope="col">AVG</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>RedBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>Avenger</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>JSBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>RedBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>
                                     
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2016-2022 Pitching Season 
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="table-sectionss table-responsive">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Team</th>
                                        <th scope="col">AB</th>
                                        <th scope="col">R</th>
                                        <th scope="col">H</th>
                                        <th scope="col">RBI</th>
                                        <th scope="col">2B</th>
                                        <th scope="col">3B</th>
                                        <th scope="col">LOB</th>
                                        <th scope="col">G</th>
                                        <th scope="col">AVG</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>RedBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>Avenger</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>JSBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>RedBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>
                                     
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Career Total 
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="table-sectionss">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Saason</th>
                                        <th scope="col">AB</th>
                                        <th scope="col">R</th>
                                        <th scope="col">H</th>
                                        <th scope="col">RBI</th>
                                        <th scope="col">2B</th>
                                        <th scope="col">3B</th>
                                        <th scope="col">LOB</th>
                                        <th scope="col">G</th>
                                        <th scope="col">AVG</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>RedBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>Avenger</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>JSBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>

                                      <tr>
                                        <td>RedBull</td>
                                        <td>20</td>
                                        <td>9</td>
                                        <td>08</td>
                                        <td>17</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>0.25</td>
                                      </tr>
                                     
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
     </div>


</section>
@endsection