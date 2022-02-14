
@extends('master')
    @section('content')

    
     <div class="welcome-area bg-img bg-overlay"  style="background-image: url(img/bg-img/pexels.jpg);height:700px"  id="home">
        <div class="hero-slider owl-carousel">
       
            <div class="single-slider">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-content home-slider mt-we-70 mt-sm-100">
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s">Import Export </h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">...</h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="service/exportimport"><span>Start Now</span></a>
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
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s"> Construction FitOut</h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">The Fit-Out Construction Process and Different Types of Fit-Outs</h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="service/travaux"><span>Start Now</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="welcome-thumb-slider mt-70">
                            <a href="service/travaux">
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
                                <h3 class="wow fadeInUp" data-wow-delay="0.4s">it-solution</h3>
                                <h5 class="wow fadeInUp" data-wow-delay="0.6s">....</h5>
                                <div class="slider-btn mt-30">
                                    <a class="boxed-btn" href="service/it"><span>Start Now</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="welcome-thumb-slider mt-70">
                            <a href="service/it">
                                <img  style="width:auto;height:410px;background-color:#0a5ea2;border-radius: 5%;" src="{{ asset('img/dv.jpg') }}" alt="" >
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
                                  
                                    <p class="text-black  mb-0 mt-0" >Al Majlis Trading is a company founded on local traditions that have evolved over many years to help us become a leading importer in Qatar. Al Majlis Trading imports
                                                                  the highest quality products from around the world to fulfil the extensive needs of an economy experiencing unprecedented growth.
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
                        <h2 class="ligne" >Our Service</h2>
                        <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> -->
                    </div>
                </div>
            </div>

          

            <div class="row  " >
                <div class="col-12">
                    <div class="content-box">
                        <div class="inner-box" >

                        <div class="row "    >
                             <!-- Service Export Import -->               
                            <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s" >
                                <div class="single-blog-area  border-hover"  >
                                     <!-- Thumb -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="service/exportimport">
                                            <img src="{{ asset('img/expo.jpg') }}" alt="" style=" border-radius: 8px;height: 200px; ">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="{{url('/service/it')}}">
                                            <h5 class="ligne">Export Import</h5>
                                        </a>
                                        <span class="ligne">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, debitis?</span>
                                        <p><a href=""></a></p>
                                    </div>                        
                               
                           </div> 
                           

                            <!-- Service Les Travaux Divers -->               
                            <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s">
                                <div class="single-blog-area  border-hover">
                                     <!-- Thumb -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="service/travaux">
                                            <img src="{{ asset('img/civil.jpg') }}" alt="" style=" border-radius: 8px; height: 200px;">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="service/travaux">
                                            <h5 class="ligne">Construction</h5>
                                        </a>
                                        <span class="ligne">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, quas!</span>
                                        <p><a href=""></a></p>
                                    </div>                        
                                
                           </div> 

                            <!-- Service it-solution-->               
                            <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s">
                                <div class="single-blog-area  border-hover">
                                     <!-- Thumb -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="{{url('/service/realEstate')}}">
                                            <img src="{{ asset('img/immo-2.jpg') }}" alt="" style=" border-radius: 8px; height: 200px; ">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="{{url('/service/realEstate')}}">
                                            <h5 class="ligne">Real Estate</h5>
                                        </a>
                                        <span class="ligne">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, repellendus?</span>
                                        <p><a href=""></a></p>
                                    </div>                        
                               
                           </div> 

                                         
                             <!-- Service autre service -->               
                             <div class="col-md-6 col-lg-3  animate__fadeInUp  wow zoomIn" data-wow-delay="0.6s">
                                <div class="single-blog-area  border-hover">
                                     <!-- -->
                                     <div class="blog-thumb" style="width: 150;height: 10;">                          
                                        <a  href="service/it">
                                            <img src="{{ asset('img/dv.jpg') }}" alt="" style=" border-radius: 8px; height: 200px; ">
                                        </a>                            
                                     </div>
                                     </div>
                                    <!-- Content -->
                                    <div class="single-blog-content mt-10">                          
                                        <a href="service/it">
                                            <h5 class="ligne">It Solution</h5>
                                        </a>
                                        <span class="ligne">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, repellendus?</span>
                                        <p><a href=""></a></p>
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
                            <img src="img/icon-img/11.svg" alt="">
                        </div>
                        <!-- Product COntent Text -->
                        <div class="product-content-text">
                            <a href="#">
                                <h4>title</h4>
                            </a>
                            <p class="mb-0 ">text</p>
                        </div>
                    </div>
                </div>

                <!-- Single Product Build -->
                <div class="col-md-6 col-lg-4 product-pt-80  animate__fadeInUp   wow zoomIn" data-wow-delay="0.6s">
                    <div class="single-product-build-area">
                        <!-- Product Thumb -->
                        <div class="product-thumb home-3">
                            <img src="img/icon-img/12.svg" alt="">
                        </div>
                        <!-- Product COntent Text -->
                        <div class="product-content-text">
                            <a href="#">
                                <h4>title</h4>
                            </a>
                            <p class="mb-0">text</p>
                        </div>
                    </div>
                </div>

                <!-- Single Product Build -->
                <div class="col-md-6 col-lg-4 product-pt-40  animate__fadeInUp   wow zoomIn" data-wow-delay="0.8s">
                    <div class="single-product-build-area">
                        <!-- Product Thumb -->
                        <div class="product-thumb home-3">
                            <img src="img/icon-img/13.svg" alt="">
                        </div>
                        <!-- Product COntent Text -->
                        <div class="product-content-text">
                            <a href="#">
                                <h4>title</h4>
                            </a>
                            <p class="mb-0">text</p>
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
                            <p>Clients</p>
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
                            <p>Projects</p>
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
                            <p>Work time</p>
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
                            <p>Awards</p>
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