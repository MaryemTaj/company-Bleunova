

	<!--end=> branche navarre service  -->
@extends('master')
    @section('content')
   

    <!-- Header Area End -->

    <!-- Breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img" style="background-image: url({{url('img/unnamed.png')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Service IT-Solution</h2>
                            <p><a href="{{ url('/') }}">Home .</a> <span>Service IT-Solution</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb-end -->
    <!-- end -->
    <div class="about-us-area white-bg section-padding-100" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft">
                    <div class="why-we-content-text mb-50 ">
                        <h1 class="">About IT-Solution</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        Information technology refers to the use of computers, storage, networks and devices, infrastructures and processes to create, process, store, secure and exchange all kinds of electronic data. Information technology is generally used in the context of business operations, as opposed to technology used in personal or entertainment settings. Business use of IT includes computing and telephony
                    </h6 >
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum mb-50">
                    <img src="{{ asset('img/it-2.png') }}"alt="">
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>

 
        
 <!-- Vision immobilier  -->
 <div class="we-build-product-area grey-bg  bg-v-it  section-padding-100" >
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
                       
                            <p class="mb-0 text-left text-white text-center">Thanks to our enthusiasm, our teamwork and our values, we intend to satisfy the needs of all those who, throughout the Moroccan territory, love the quality of service, and this through the best achievements that builders, developers or fitters can offer, aided by the best technologies, by the intellectual effort that comes from the quest for beauty and quality in everything we do


                            </p>
                        </div>
                    </div>           
                </div>
            </div>
        </div>   
      
     </div>
   
     <!-- Mission & vission immobilier  -->

<!-- Mission & vission it-solution  -->
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
                        <p class="text-white" style=" line-height: 2.5;">
                        The mission of the Department of Information Technology is to build a comprehensive and quality technology infrastructure, establish and maintain an efficient operating environment, and provide quality, timely, cost-effective and reliable technology services.</p >
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum ">
                    <img src="{{ asset('img/mission.jpg') }}"alt="">
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>

 
      <!-- Mission & vision  -->
     
    <!-- We Build Area -->


    <div class="we-build-product-area overlay-bg ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center  animated slideInRight  wow zoomIn  ">                   
                        <h5  class="breadcrumb_iner_item text-center" >Services</h5>
                    </div>
                </div>
            </div>           
        </div>
    </div>




  <div class="blog_area gray-bg">
        <div class="container">
            <div class="row mb-30 justify-content-center">
                <!-- Single Blog Area -->
               
                <div class="col-md-6 col-lg-4 ">
                    <div class="single-blog-area mb-30 border border-info animated slideInRight  wow zoomIn border-bg " data-wow-delay="0.9s" >
                        <!-- Single Blog Thumb -->
                        
                        <!-- Single Blog Content -->
                        <div class="single-blog-content  text-center">
                            <div class="">
                                <span class="">
                                    <i class="fa fa-mobile fa-10x icone-it" style="font-size:60px;color:#0a5ea2;"></i>
                                </span>
                            </div>
                            <a href="{{ url('service/it/1')}}">
                                <h5>Website Design & Development</h5>
                            </a>
                            <p><a href="{{ url('service/it/1')}}">Read more</a></p>
                        </div>                        
                    </div>
                </div>

                

                <div class="col-md-6 col-lg-4 ">
                    <div class="single-blog-area mb-30 border border-info animated slideInRight  wow zoomIn border-bg " >
                        <!-- Single Blog Thumb -->
                        
                        <!-- Single Blog Content -->
                        <div class="single-blog-content   text-center">
                            <div class="">
                                <span class="">
                                    <i class="fa fa-mobile fa-10x icone-it" style="font-size:60px;color:#0a5ea2;"></i>
                                </span>
                            </div>
                            <a href="{{ url('service/it/3')}}">
                                <h5>MOBILE APPS DEVELOPMENT</h5>
                            </a>
                            <p><a href="{{ url('service/it/3')}}">Read more</a></p>
                        </div>
                        
                    </div>
                </div>
               
                
                
            </div>
            <div class="row justify-content-center section-padding-50">  
                <a href="{{ url('/contact')}}"><button class="btn boxed-btn">Contact us</button></a>
        
          </div> 

            </div>
        </div>       

    
    <!--end
    <div class="feature-area gray-bg section-padding-100-50" id="service">
        <div class="container">
            <div class="row justify-content-center">
                Single Feature area 
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon 
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/1.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text {{ asset('img/icon-img/1.svg') }}
                        <div class="feature-content-text">
                        <h4>title</h4>
                            <p class="mb-0">text........................<a href="{{ url('/service/it/1')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area 
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon 
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/2.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text {{ asset('img/icon-img/2.svg') }} 
                        <div class="feature-content-text">
                        <h4>title</h4>
                            <p class="mb-0">text........................<a href="{{ url('/service/it/2')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area 
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon 
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/3.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text {{ asset('img/icon-img/3.svg') }} 
                        <div class="feature-content-text">
                        <h4>title</h4>
                            <p class="mb-0">text........................<a href="{{ url('/service/it/3')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </div> -->
     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    