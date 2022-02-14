

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
                            <h2>Service it-solution</h2>
                            <p><a href="{{ url('/') }}">Home .</a> <span>Service it-solution</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb-end -->
    <!-- end -->
    <div class="about-us-area white-bg section-padding-50-50" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animated slideInLeft">
                    <div class="why-we-content-text mb-50 ">
                        <h1 class="">About it-solution</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        Les technologies de l'information (ou IT pour Information Technology) désignent l'usage des ordinateurs, du stockage, des réseaux et des appareils, des infrastructures et des processus pour créer, traiter, stocker, sécuriser et échanger toutes sortes de données électroniques.
Les technologies de l'information sont généralement utilisées dans le contexte des opérations d'entreprise, par opposition aux technologies utilisées dans le cadre personnel ou du divertissement. L'usage commercial de l'IT englobe l'informatique et la téléphonie

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

 <!-- Mission & vission it-solution  -->
 <div class="we-build-product-area grey-bg section-padding-0-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-20 img-coding animated animate__flipInX">
                    <div class="section-heading text-center mt-5 animated slideInRight  wow zoomIn  ">                   
                        <h5 style="color:white; " class="breadcrumb_iner_item text-center" >Mission & vision</h5>
                    </div>
                </div>
            </div>

            
        </div>
    </div>


    <div class="feature-area white-bg section-padding-0-50 " id="service">
        <div class="container-fluid">
            <div class="row justify-content-center shadow-lg p-3 mb-5 bg-white rounded">
                <!-- Single Feature area -->
                <div class="col-md-4 col-lg-6 mt-a50 animated slideInLeft ">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/1.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text {{ asset('img/icon-img/1.svg') }}-->
                        <div class="feature-content-text">
                        <h4>Our mission</h4>
                            <p class="mb-0">


                            Développer les ventes de son entreprise. Assurer la négociation des contrats et formuler des propositions commerciales. Coordonner entre plusieurs équipes internes et des partenaires externes (Grossistes, distributeurs,…) Mettre en place des objectifs commerciaux et les moyens pour y arriver.

                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-4 col-lg-6 mt-a50 animated slideInRight">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/2.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text {{ asset('img/icon-img/2.svg') }} -->
                        <div class="feature-content-text">
                        <h4>Our vision</h4>
                            <p class="mb-0">Lorem ipsunventore exercitationem ratione ea quibusdam officia nesciunt qui tenetur incidunt et mollitia necessitatibus debitis, quisquam, atque consequuntur ut eveniet voluptates minima. Asperiores, qui dolore quod cum dolores maxime harum.</p>
                        </div>
                    </div>
                </div>

                

            
            </div>
        </div>
    </div>
     <!-- Mission & vission it-solution  end -->
    <!-- We Build Area -->


    <div class="we-build-product-area grey-bg ">
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




  <div class="blog_area ">
        <div class="container">
            <div class="row">
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
                    <div class="single-blog-area mb-30 border border-info border-bg animated slideInRight  wow zoomIn" style="">
                        <!-- Single Blog Thumb -->
                        
                        <!-- Single Blog Content -->
                        <div class="single-blog-content   text-center">
                            <div class="">
                                <span class="">
                                <i class="fas fa-boxing-glove"></i>
                                    <i class="fa fa-desktop fa-10x icone-it" style="font-size:60px;color:#0a5ea2;"></i>
                                </span>
                            </div>
                            <a href="{{ url('service/it/2')}}">
                                <h5>MOBILE APPS DEVELOPMENT</h5>
                            </a>
                            <p><a href="{{ url('service/it/2')}}">Read more</a></p>
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
   


   

    