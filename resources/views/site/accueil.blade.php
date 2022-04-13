
@extends('master')
    @section('content')

    
     <div class="welcome-area bg-img bg-overlay"  style="background-image: url(img/bg-img/pexels.jpg);height:700px"  id="home">
        <div class="hero-slider owl-carousel">
       
            <div class="single-slider">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-content home-slider mt-we-70 mt-sm-100">
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s"> {{__('service-import-export_title')}} </h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">{{__('service-import-export_desc_slide')}} </h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="{{ url(app()->getLocale().'/service/exportimport') }}"><span>{{__('button_start_now')}}</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="welcome-thumb-slider mt-70">
                            <a href="service/exportimport">
                                <img  style="width:120%;height:410px;background-color:#0a5ea2;border-radius: 5%;" src="{{ asset('img/expo_impo.jpg') }}" alt="" >
                            </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      


            <div class="single-slider">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-content home-slider mt-we-70 mt-sm-100">
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s">{{__('service-construction_title')}} </h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">{{__('service-construction_desc_slide')}}</h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="{{ url(app()->getLocale().'/service/travaux') }}"><span>{{__('button_start_now')}}</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="welcome-thumb-slider mt-70">
                            <a href="{{ url(app()->getLocale().'/service/travaux') }}">
                                <img  style="width:auto;height:410px;background-color:#0a5ea2;border-radius: 5%;" src="{{ asset('img/home.jpg') }}" alt="" >
                            </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-slider">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-content home-slider mt-we-70 mt-sm-100">
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s">{{__('service-it_title')}} </h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">{{__('service-it_desc_slide')}}</h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="{{ url(app()->getLocale().'/service/it') }}"><span>{{__('button_start_now')}}</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="welcome-thumb-slider mt-70">
                            <a href="{{ url(app()->getLocale().'/service/it') }}">
                                <img  style="width:auto;height:410px;background-color:#0a5ea2;border-radius: 5%;" src="{{ asset('img/dv.jpg') }}" alt="" >
                            </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-slider">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-content home-slider mt-we-70 mt-sm-100">
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s">{{__('service-real-estate_title')}} </h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">{{__('service-real-estate_desc_slide')}} </h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="{{ url(app()->getLocale().'/service/realEstate') }}"><span>{{__('button_start_now')}}</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="welcome-thumb-slider mt-70">
                            <a href="{{ url(app()->getLocale().'/service/realEstate') }}">
                                <img  style="width:auto;height:410px;background-color:#0a5ea2;border-radius: 5%;" src="{{ asset('img/RE.jpg') }}" alt="" >
                            </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>



    <!-- Welcome-area-end -->
     <br><br>
     <!-- introduction -->
     <div class="call-to-desc-area">
        <div class="container section-padding-0-50">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-area">
                        <div class="row">
                            <!-- Single Content -->
                            <div class="col-md-6 col-lg-4 animated slideInRight">
                                <div class="single-call-desc-content ca-mb-50">
                                <div class="feature-img ">
                            <img class="img-fluid" src="{{ asset('img/pre.png') }}" alt="" style="">
                        </div>
                                </div>
                            </div>
                            <!-- Single Content -->
                            <div class="col-md-6 col-lg-8 animated slideInRight">
                                <div class="single-call-desc-content">
                                  
                                    <p class="text-black  mb-0 mt-0" ><b>Blue Nova {{__('type_company')}}</b> {{__('introduction_company')}}
</p>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!--end introduction -->
   
    <!-- Our Service Area -->
    <div class="our-service-area section-padding-50-50 content-service" > 
        <div class="container"  >
            <div class="row justify-content-center  ">
                <div class="col-md-8 col-lg-7 section-padding-10">
                    <div class="section-title t_center  animated slideInRight  wow zoomIn" data-wow-delay="0.2s">
                        <div class="ligne"></div>
                        <h1 class="ligne" >{{__('our_service')}}</h1>
                        <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> -->
                    </div>
                </div>
            </div>

          

            <div class="row  " >
                <div class="col-12">
                    <div class="content-box">
                        <div class="inner-box" >

                        <div class="row">
                             <!-- Service Export Import -->               
                            <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s" >
                                <div class="single-blog-area  border-hover"  >
                                     <!-- Thumb -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="{{url(app()->getLocale().'/service/exportimport')}}">
                                            <img src="{{ asset('img/expo.jpg') }}" alt="" style=" border-radius: 8px;height: 200px; ">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="{{url(app()->getLocale().'/service/exportimport')}}">
                                            <h1 class="ligne">{{__('service-import-export_title')}} </h1>
                                        </a>
                                        <span class="ligne">{{__('service-import-export_description')}}</span>
                                        <p></p>
                                    </div>                        
                               
                           </div> 
                           

                            <!-- Service Les Travaux Divers -->               
                            <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s">
                                <div class="single-blog-area  border-hover">
                                     <!-- Thumb -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="{{url(app()->getLocale().'/service/travaux')}}">
                                            <img src="{{ asset('img/civil.jpg') }}" alt="" style=" border-radius: 8px; height: 200px;">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="{{url(app()->getLocale().'/service/travaux')}}">
                                            <h1 class="ligne">{{__('service-construction_title')}}</h1>
                                        </a>
                                        <span class="ligne">{{__('service-construction_description')}}</span>
                                        <p></p>
                                    </div>                        
                                
                           </div> 

 <!-- Service autre service -->               
 <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s">
                                <div class="single-blog-area  border-hover">
                                     <!-- -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="{{url(app()->getLocale().'/service/it')}}">
                                            <img src="{{ asset('img/dv.jpg') }}" alt="" style=" border-radius: 8px; height: 200px; ">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="{{url(app()->getLocale().'/service/it')}}">
                                            <h1 class="ligne">{{__('service-it_title')}}</h1>
                                        </a>
                                        <span class="ligne">{{__('service-it_description')}}</span>
                                        <p></p>
                                    </div>                        
                               
                           </div> 
                           

                            <!-- Service it-solution-->               
                            <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s">
                                <div class="single-blog-area  border-hover">
                                     <!-- Thumb -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="{{url(app()->getLocale().'/service/realEstate')}}">
                                            <img src="{{ asset('img/immo-2.jpg') }}" alt="" style=" border-radius: 8px; height: 200px; ">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="{{url(app()->getLocale().'/service/realEstate')}}">
                                            <h1 class="ligne">{{__('service-real-estate_title')}}</h1>
                                        </a>
                                        <span class="ligne">

                                        {{__('service-real-estate_description')}}
                                        </span>
                                        <p></p>
                                    </div>                        
                               
                           </div> 

                                         
                            

                        </div>
                            <!--
                            our service old    
                            
                            <div class="row justify-content-center"> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="single-item">
                                        <div class="icon-box"> 
                                                <a href="service/exportimport">    
                                                    <img src="{{ asset('img/expo.jpg') }}" width="90" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"/>
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </a>
                                        </div>
                                        <div class="single-item-text centered">
                                            <a href="service/exportimport">
                                                <h5>Export Import</h5>
                                            </a>
                                        
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="single-item">
                                        <div class="icon-box"> 
                                                <a href="service/travaux">    
                                                    <img src="{{ asset('img/civil.jpg') }}" width="90" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"/>
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </a>
                                        </div>
                                        <div class="single-item-text centered">
                                            <a href="service/travaux">
                                                <h5>Les Travaux Divers</h5>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-3">
                                    <div class="single-item">
                                        <div class="icon-box"> 
                                                <a href="service/it">    
                                                    <img src="{{ asset('img/dv.jpg') }}" width="90" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"/>
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </a>
                                        </div>
                                        <div class="single-item-text centered">
                                        <a href="service/it">
                                                <h5>it-solution</h5>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>

                

                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Our Service Area -->

    <!-- We Build Product Area -->
    <div class="we-build-product-area section-padding-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h6>Products</h6>
                        <h4>We Build Tools For the Web</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center ">
                <!-- Single Product Build -->
                <div class="col-md-6 col-lg-4  animate__fadeInUp  wow zoomIn" data-wow-delay="0.4s">
                    <div class="single-product-build-area">
                        <!-- Product Thumb -->
                        <div class="product-thumb home-3">
                            <img src="img/mission-home.jpg" alt="">
                        </div>
                        <!-- Product COntent Text -->
                        <div class="product-content-text">
                           
                                <h4>{{__('mission_company_title')}}</h4>
                           
                            <p class="mb-0 ">{{__('mission_company_description')}}</p>
                        </div>
                    </div>
                </div>

                <!-- Single Product Build -->
                <div class="col-md-6 col-lg-4   animate__fadeInUp   wow zoomIn" data-wow-delay="0.6s">
                    <div class="single-product-build-area">
                        <!-- Product Thumb -->
                        <div class="product-thumb home-3">
                            <img src="img/vision-home.jpg" alt="">
                        </div>
                        <!-- Product COntent Text -->
                        <div class="product-content-text">
                            
                                <h4>{{__('vision_company_title')}}</h4>
                           
                            <p class="mb-0">{{__('vision_company_description')}}</p>
                        </div>
                    </div>
                </div>

                <!-- Single Product Build -->
                <div class="col-md-6 col-lg-4   animate__fadeInUp   wow zoomIn" data-wow-delay="0.8s">
                    <div class="single-product-build-area">
                        <!-- Product Thumb -->
                        <div class="product-thumb home-3">
                            <img src="img/wedo.jpg" alt="">
                        </div>
                        <!-- Product COntent Text -->
                        <div class="product-content-text">
                           
                                <h4>{{__('what_we_do_title')}} </h4>
                           
                            <p class="mb-0">{{__('what_we_do_description')}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Build Area -->

    <!-- Counter-start -->
    <div class="counter-area gray-bg section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-bg"></div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.2s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">11</span><span>K</span></h3>
                            <p>{{__('client_title')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.4s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-package"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">580</span><span>+</span></h3>
                            <p>{{__('project_title')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.6s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-alarm-clock"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">2400</span><span>H</span></h3>
                            <p>{{__('work_time')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-counter bg-overlay bg-img mb-50 wow zoomIn" data-wow-delay="0.8s" style="background-image: url(img/bg-img/10.jpg);">
                        <div class="icon">
                            <i class="ti-cup"></i>
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">35</span></h3>
                            <p>{{__('awards')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter-start -->

   
    <!-- App Screen Shot Area -->
    <div class="app-screen-shot-area gray-bg section-padding-100" id="work">
        <div class="container">
            <div class="row" >
                <div class="col-12" >
              <!--  <h2 class="text-center ">Blog</h2>-->
                    <div class="app-shot">
                    @foreach($posts as $post)
                 
                    <a  href="{{ url('/blog/'.$post->slug)}}" >
                        <div><img  src="{{ asset('/storage/'.$post->image)}}" alt=""  width="170" height="100" ></div>
                    </a>    
                    @endforeach    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App Screen Shot Area -->
     <!--================réalisé par anwar mohamed elkahza =================-->

    

    
  


	@endsection