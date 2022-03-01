

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
                            <h2>Services General Construction</h2>
                            <p><a href="{{ url('/') }}">Home .</a> <span>Services General Construction  </span></p>
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
                        <h1 class="">About General Construction </h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        The construction activity is essentially an activity of implementation or installation on the customer's site and which concerns both new work and renovation, repair or maintenance.</h6 >
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
                       
                            <p class="mb-0 text-left text-white text-center">In the vision that we have developed, we intend to be the benchmark for building, fittings and interior design. An innovative company that offers the best products and services and that, thanks to this, grows and becomes a leader in the market


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
                        <h3 style="color:white; " class="breadcrumb_iner_item befor after text-center" >Our Mission</h3>
                    </div>
                </div>
            </div>  
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft border-grad">
                    <div class="feature-content-text  section-padding-80">
                       
                        
                        <br>
                        <p class="text-white" style="line-height:2.1">

                        Thanks to our enthusiasm, our teamwork and our values, we intend to satisfy the needs of all those who, throughout the Moroccan territory, love the quality of service, and this through the best achievements that builders, developers or fitters can offer, aided by the best technologies, by the intellectual effort that comes from the quest for beauty and quality in everything we do
                             
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
                            <h4>Team</h4>
                             <a style="color:#273d88" href="{{ url('/service/travaux/1')}}">Meet our team</a>
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
                        <h4 >Project</h4>
                         <a style="color:#273d88" href="{{ url('/service/travaux/2')}}">Read more</a>
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
                        <h4>Materiels</h4>
                            <a style="color:#273d88" href="{{ url('/service/travaux/3')}}">Read more</a>
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
   


   

    