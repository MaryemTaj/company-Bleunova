

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
                            <p><a href="{{ url('/') }}">Home .</a> <span>Services Rale Estate </span></p>
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
                        <h1 class="">About Rale Estate</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Tempora nam accusantium voluptatum impedit obcaecati alias, 
                         cupiditate incidunt magnam ad, distinctio nostrum, 
                         ullam eveniet est magni iusto? A sint nihil vitae! 
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                         Voluptatum exercitationem vero maxime eum neque, non, 
                         debitis cupiditate adipisci ad dignissimos cum officiis illum praesentium quibusdam impedit eius ipsam deserunt porro.</h6 >
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
      <!-- about import export end-->

    <!-- Mission & vission immobilier  -->
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
                            <p class="mb-0 text-left">mettre en relation les vendeurs et les potentiels acquéreurs d’un bien immobilier. Ses principales tâches consistent à :</p>
<ul class="text-left"><li>Évaluer des biens (diagnostic immobilier)</li>
<li>Prospecter la clientèle.</li>
<li>Conseiller ses clients (estimation des prix, démarches administratives, aspect juridique…).</li>
<li>Créer des petites annonces des biens mis en vente.</li>
<li>Conseiller ses clients (estimation des prix, démarches administratives, aspect juridique…).</li>
<li>Créer des petites annonces des biens mis en vente.</li>
<li>Rédiger divers types de documents (avant-contrat).</li>
<li>Organiser des visites d’appartements.</li>
<li>Accompagnement des clients jusqu’à la vente du bien immobilier.</li></ul>


                            
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
                            <p class="mb-0">à contre courant d’une société toujours plus pressée, mes agents et moi sommes attachés à prendre tout le temps qu’il faut pour nos clients – vendeurs et acquéreurs. Le temps de visiter les lieux, d’en débusquer ses charmes évidents et ses qualités cachées ; de questionner ses points faibles ou à améliorer. Le temps aussi de sonder les attentes de nos clients, les explorer, les questionner.
C’est une démarche passionnante où interviennent la réflexion, l’analyse et l’observation : celle du bien, de son contexte, ce qui s’échange sur ce marché. En somme, notre expertise s’accompagne toujours de patience et d’humilité.


                            </p>
                        </div>
                    </div>
                </div>

                

            
            </div>
        </div>
    </div>
     <!-- Mission & vission immobilier end -->


    <div class="feature-area gray-bg section-padding-100-50" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/1.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Team</h4>
                            <p class="mb-0">We have a experienced Team<a href="{{ url('/service/travaux/1')}}"><br>Meet our team</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/2.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Project</h4>
                            <p class="mb-0">text........................<a href="{{ url('/service/travaux/2')}}"><br>Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/3.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Clients</h4>
                            <p class="mb-0">text........................<a href="{{ url('/service/travaux/3')}}"><br>Read more</a></p>
                        </div>
                    </div>
                </div>

                 <!-- Single Feature area -->
                 <div class="col-md-6 col-lg-3">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/2.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Materiels</h4>
                            <p class="mb-0">text........................<a href="{{ url('/service/travaux/3')}}"><br>Read more</a></p>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </div>
     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    