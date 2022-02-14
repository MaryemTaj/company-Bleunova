

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
                            <h2>Services Construction FitOut</h2>
                            <p><a href="{{ url('/') }}">Home .</a> <span>Services Construction FitOut </span></p>
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
                        <h1 class="">About Construction FitOut</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        L'activité de construction est essentiellement une activité de mise en œuvre ou d'installation sur le chantier du client et qui concerne aussi bien les travaux neufs que la rénovation, la réparation ou la maintenance.
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
                            <p class="mb-0">Grâce à notre enthousiasme, notre travail en équipe et nos valeurs, nous entendons satisfaire les besoins de tous ceux qui, dans tout le territoire marocain, aiment la qualité de service, et ce à travers les meilleures réalisations que les bâtisseurs, aménageurs ou agenceurs peuvent offrir, aidés par les meilleures technologies, par l'effort intellectuel qui nait de la quête du beau et du qualitatif dans tout ce que nous faisons</p>
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
                            <p class="mb-0">Dans la vision que nous avons développé, nous entendons être la référence du bâtiment, de l'aménagement et de l'agencement d'intérieur. Une entreprise innovante qui propose les meilleurs produits et services et qui, grâce à cela, grandit et devient leader sur le marché.
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
   


   

    