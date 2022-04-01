

	<!--end=> branche navarre service  -->
    @extends('master')
    @section('content')
   

    

    <!-- Breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img"  style="background-image: url({{url('img/immo-3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Services Rale Estate</h2>
                            <p><a href="{{ url('/') }}">{{__('home')}} .</a> <span>Services Rale Estate </span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb-end -->

    <!-- about real estate-->
    <div class="about-us-area white-bg section-padding-50-50" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft">
                    <div class="why-we-content-text mb-50 ">
                        <h1 class="">About Rale Estate</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        Real estate, as compared to movable property, is property that cannot be moved, the Latin root of the word “real estate” meaning “that does not move”. This may concern bare land, a building or part of a building for residential, office, industrial use, etc.</h6 >
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum mb-50">
                    <img src="{{ asset('img/immo-1.jpg') }}"alt="">
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>
      <!-- about real estate end-->

  
 
     <!-- Mission & vision  -->


          <!-- about import export end-->


          <div class="we-build-product-area  bg-v-rl bg-overlay section-padding-100" >
        <div class="container">
            <div class="row">
                <div class="col-12  animated animate__flipInX">
                    <div class="section-heading text-center mt-5 animated slideInRight  wow zoomIn  ">                   
                        <h3 style="color:white; " class="breadcrumb_iner_item befor text-center" >Our Vision</h3>
                    </div>
                </div>
            </div>           
            
            <div class="row justify-content-center ">
                <!-- Single Feature area -->
                <div class="col-md-12 col-lg-12 mt-a50 animated slideInLeft ">
                    <div class="text-center border   shadow-lg p-3 mb-5 rounded ">
                        <!-- Single Feature Text {{ asset('img/icon-img/1.svg') }}-->
                        <div class="feature-content-text section-padding-40-40">
                       
                        <p class="mb-0 text-left text-white">Against the tide of an ever more rushed society, my agents and I are committed to taking all the time necessary for our clients - sellers and buyers. The time to visit the places, to flush out its obvious charms and its hidden qualities; to question its weak points or to improve. Time also to probe our customers' expectations, explore them, question them.
It is an exciting process involving reflection, analysis and observation: that of the good, its context, what is exchanged on this market. In short, our expertise is always accompanied by patience and humility.
                            </p>
                        </div>
                    </div>           
                </div>
            </div>
        </div>   
      
     </div>
   

    <!-- Mission & vision  -->
 



        <br><br>
<div class="about-us-area bg-light bg-m-it bg-overlay section-padding-0-100" id="about">
        <div class="container">
        <div class="row">
                <div class="col-12  animated animate__flipInX">
                    <div class="section-heading text-center animated slideInRight  wow zoomIn  ">                   
                        <h3 style="color:white; " class="breadcrumb_iner_item befor after text-center" >Our Mission</h3>
                    </div>
                </div>
            </div>  
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft border-grad">
                    <div class="feature-content-text mb-4 ">
                       
                        
                        <br>
                        <p class="mb-0 text-white">
                        Connect sellers and potential buyers of real estate. Its main tasks are to 
                         </p><br>

                         <ul class="mb-0 text-left list" style="">
                                <li><p class="mb-2 text-white">- Evaluate properties (real estate diagnosis)</p></li>
                                <li><p class="mb-2 text-white">- Prospecting customers</p></li>
                                <li><p class="mb-2 text-white">- Advise clients (price estimate, administrative procedures, legal aspects, etc.)</p></li>
                                <li><p class="mb-2 text-white">- Create classified ads for properties for sale</p></li>
                                <li><p class="mb-2 text-white">- Draft various types of documents (pre-contract)</p></li>
                                <li><p class="mb-2 text-white">- Organize apartment visits</p></li>
                                <li><p class="mb-2 text-white">- Accompaniment of clients until the sale of the property.</p></li> 
                            </ul>
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum ">
                    <img src="{{ asset('img/mission-rl.jpg') }}" alt="" >
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>


     
      <!-- Vision real estate -->
     
   
     <!-- Mission & vission real estate  -->



    <div class="feature-area gray-bg section-padding-100-50" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/teams.png') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Team</h4>
                             <a style="color:#273d88" href="{{ url('/service/realEstate/1')}}">Meet our team</a>
                        </div>
                    </div>
                </div>

               

                          
            </div>
        </div>
    </div>

<!-- Our clients -->
    <div class=" section-padding-0-50 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h6 class="section-padding-0-20" style="color:#0a0a0a">Our Clients</h6>
                        <div class="container client-ligne" style=""></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">
                <!-- Single Product Build -->
                <div class="col-md-3 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.4s">
                             
                       
                        <div class="card1" style="width: 18rem margin-right:10px; margin-buttom:100px">
                            <img class="card-img-top" src="{{ asset('img/client-real-estate/villa-kech.jpg') }}" alt="Card image cap" style="height:215px">
                                <div class="card-body">
                                    <h5 class="card-title">villa ourika Marrakech</h5>  
                                </div>
                        </div>

                                      
                </div>

                <!-- Single Product Build -->
                <div class="col-md-3 col-lg-3   animate__fadeInUp   wow zoomIn" data-wow-delay="0.6s">
                       
                        <div class="card1" style="width: 18rem margin-right:10px; margin-buttom:10px">
                            <img class="card-img-top" src="{{ asset('img/client-real-estate/casa.jpg') }}" alt="Card image cap" style="height:215px"  >
                                <div class="card-body">
                                    <h5 class="card-title">Immeuble R+7- Casablanca </h5>   
                                </div>
                        </div>


                                    
                    
                </div>

                <!-- Single Product Build -->
                <div class="col-md-3 col-lg-3 animate__fadeInUp   wow zoomIn" data-wow-delay="0.8s">
               
                        
                        <div class="card1" style="width: 18rem;  margin-right:10px;">
                            <img class="card-img-top" src="{{ asset('img/client-real-estate/derb-omar.jpg') }}" alt="Card image cap" >
                                <div class="card-body">
                                    <h5 class="card-title">Magasin Derb omar Casablanca </h5>  
                                </div>
                        </div>
                                   
                </div>
                
                
            </div>
        </div>
    </div>     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    