

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
                            <h2>Services {{__('service-real-estate_title')}}</h2>
                            <p><a href="{{ url('/') }}">{{__('home')}} .</a> <span>Services {{__('service-real-estate_title')}} </span></p>
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
                        <h1 class="">{{__('about-real-estate_title')}}</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        {{__('about-real-estate_description')}}
                      </h6 >
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
                        <h3 style="color:white; " class="breadcrumb_iner_item befor text-center" >{{__('vision_title')}}</h3>
                    </div>
                </div>
            </div>           
            
            <div class="row justify-content-center ">
                <!-- Single Feature area -->
                <div class="col-md-12 col-lg-12 mt-a50 animated slideInLeft ">
                    <div class="text-center border   shadow-lg p-3 mb-5 rounded ">
                        <!-- Single Feature Text {{ asset('img/icon-img/1.svg') }}-->
                        <div class="feature-content-text section-padding-40-40">
                       
                        <p class="mb-0 text-left text-white">
                        {{__('vision-real-estate_description')}}
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
                        <h3 style="color:white; " class="breadcrumb_iner_item befor after text-center" >  {{__('mission_title')}}</h3>
                    </div>
                </div>
            </div>  
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft border-grad">
                    <div class="feature-content-text mb-4 ">
                       
                        
                        <br>
                        <p class="mb-0 text-white">
                        {{__('mission-real-estate_description')}} 
                         </p><br>

                         <ul class="mb-0 text-left list" style="">
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description1')}} </p></li>
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description2')}} </p></li>
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description3')}} </p></li>
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description4')}} </p></li>
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description5')}} </p></li>
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description6')}} </p></li>
                                <li><p class="mb-2 text-white">  {{__('mission-real-estate_description7')}} </p></li> 
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
                            <h4>  {{__('team')}} </h4>
                             <a style="color:#273d88" href="{{ url(app()->getLocale().'/service/realEstate/1')}}">{{__('meet_our_team')}}</a>
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
                        <h6 class="section-padding-0-20" style="color:#0a0a0a">{{__('our_client')}}</h6>
                        <div class="container client-ligne" style=""></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">
                <!-- Single Product Build -->
                <div class="col-md-3 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.4s">
                             
                       
                        <div class="card" style="width: 18rem margin-right:10px; margin-buttom:100px">
                            <img class="card-img-top border border-secondary" src="{{ asset('img/client-real-estate/villa-kech.jpg') }}" alt="Card image cap" style="height:215px">
                                <div class="card-body ">
                                    <h5 class="card-title">villa ourika Marrakech</h5>  
                                </div>
                        </div>

                                      
                </div>

                <!-- Single Product Build -->
                <div class="col-md-3 col-lg-3   animate__fadeInUp   wow zoomIn" data-wow-delay="0.6s">
                       
                        <div class="card" style="width: 18rem margin-right:10px; margin-buttom:10px">
                            <img class="card-img-top" src="{{ asset('img/client-real-estate/casa.jpg') }}" alt="Card image cap" style="height:215px"  >
                                <div class="card-body">
                                    <h5 class="card-title">Immeuble R+7- Casablanca </h5>   
                                </div>
                        </div>


                                    
                    
                </div>

                <!-- Single Product Build -->
                <div class="col-md-3 col-lg-3 animate__fadeInUp   wow zoomIn" data-wow-delay="0.8s">
               
                        
                        <div class="card" style="width: 18rem;  margin-right:10px; margin-buttom:10px">
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
   


   

    