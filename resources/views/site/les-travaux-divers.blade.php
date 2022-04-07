

	<!--end=> branche navarre service  -->
@extends('master')
    @section('content')
   

    

    <!-- Breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img"  style="background-image: url({{url('img/xxx.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Services {{__('service-construction_title')}}</h2>
                            <p><a href="{{ url('/') }}">{{__('home')}} .</a> <span>Services {{__('service-construction_title')}} </span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb-end -->

    <!-- about import export-->
    <div class="about-us-area white-bg section-padding-50-50" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft">
                    <div class="why-we-content-text mb-50 ">
                        <h1 class="">{{__('about-construction_title')}} </h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        {{__('about-construction_description')}}
                        </h6 >
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum mb-50">
                    <img src="{{ asset('img/constr-1.jpg') }}"alt="">                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>
      <!-- about import export end-->

    <!-- Mission & vision  -->

    <div class="we-build-product-area bg-overlay  bg-v-c  section-padding-100" >
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
                       
                            <p class="mb-0 text-left text-white text-center">{{__('vision-construction_description')}}


                            </p>
                        </div>
                    </div>           
                </div>
            </div>
        </div>   
      
     </div>
   
     <!-- Mission & vission immobilier  -->

<!-- Mission & vission it-solution  -->


 
      <!-- Mission & vision  -->
    


        <br><br>
<div class="about-us-area bg-light bg-m-it bg-overlay section-padding-0-100" id="about">
        <div class="container">
        <div class="row">
                <div class="col-12  animated animate__flipInX">
                    <div class="section-heading text-center animated slideInRight  wow zoomIn  ">                   
                        <h3 style="color:white; " class="breadcrumb_iner_item befor after text-center" >{{__('mission_title')}}</h3>
                    </div>
                </div>
            </div>  
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft border-grad">
                    <div class="feature-content-text  section-padding-80">
                       
                        
                        <br>
                        <p class="text-white" style="line-height:2.1">

                        {{__('mission-construction_description')}}
                             
                       </p >
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum ">
                    <img src="{{ asset('img/mission-c.jpg') }}"alt="">
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>

 

    
   
     <!-- Mission & vission immobilier  -->


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
                            <h4>{{__('team')}}</h4>
                             <a style="color:#273d88" href="{{ url(app()->getLocale().'/service/travaux/1')}}">{{__('meet_our_team')}}</a>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/architect.png') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4 >{{__('project')}}</h4>
                         <a style="color:#273d88" href="{{ url(app()->getLocale().'/service/travaux/2')}}">{{__('button_plus')}}</a>
                        </div>
                    </div>
                </div>


                 <!-- Single Feature area -->
                 <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/materials.png') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>{{__('material')}}</h4>
                            <a style="color:#273d88" href="{{ url(app()->getLocale().'/service/travaux/3')}}">{{__('button_plus')}}</a>
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

            
                        <!-- start Content -->
                        <div class="row justify-content-center">                          
                                <div class="" style="width: 5rem; margin-right:3%"  >
                                    <img src="{{ asset('img/projet-constr/africa-gaz.png') }}" class="" alt="..."  >
                                       
                                </div>
                                                   
                                <div class="" style="width: 5rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/marocgaz.jpg') }}" class="" alt="...">                                       
                                </div>
                          
                                <div class="" style="width: 5rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/algha-assurance.jpg') }}" class="-" alt="...">                                       
                                </div>
                                                    
                                <div class="" style="width: 5rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/idemia.jpg') }}" class="" alt="...">                                       
                                </div>

                                <div class="" style="width: 10rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/akwa.jpg') }}" class="" alt="...">                                       
                                </div>   
                                
                                <div class="" style="width: 10rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/four-Seasons.jpg') }}" class="" alt="...">                                       
                                </div> 
                        </div>  
                        <!-- end projet maroc -->
        </div>
    </div>




     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    