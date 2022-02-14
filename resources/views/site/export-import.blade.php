

@extends('master')
    @section('content')
   

    <!-- Header Area End -->

    <!-- Breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img" style="background-image: url({{url('img/banner2.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Service Export Import</h2>
                            <p><a href="{{ url('/') }}">Home .</a> <span>Service Export Import </span></p>
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
                        <h1 class="">About Import Export</h1>
                        
                        <br>
                        <h6  style="font-family:Times New Roman, Times, serif;border-buttom:solid 5px red">
                        Le commerce international est l'échange de biens, de services entre pays. Ce type de commerce existe depuis des siècles , mais il connaît un nouvel essor du fait de la mondialisation économique. <br>
 La théorie du commerce international est la branche de l'économie qui étudie et modélise le commerce international. <br>
Activité commerciale qui a pour objet l'acquisition de produits en provenance de l'étranger et la vente des produits nationaux à l'étranger.
</h6 >
                    </div>
                </div>

                <div class="col-md-6 animated slideInRight">
                    <div class="why-we-thum mb-50">
                    <img src="{{ asset('img/import-1.jpg') }}"alt="">
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>
      <!-- about import export end-->


 <!-- mission vision import export -->

 <div class="we-build-product-area grey-bg section-padding-0-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-20 img-import ">
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
                            <p class="mb-0">Développer les ventes de son entreprise. Assurer la négociation des contrats et formuler des propositions commerciales. Coordonner entre plusieurs équipes internes et des partenaires externes (Grossistes, distributeurs,…) Mettre en place des objectifs commerciaux et les moyens pour y arriver.

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
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta quas autem, inventore exercitationem ratione ea quibusdam officia nesciunt qui tenetur incidunt et mollitia necessitatibus debitis, quisquam, atque consequuntur ut eveniet voluptates minima. Asperiores, qui dolore quod cum dolores maxime harum.</p>
                        </div>
                    </div>
                </div>

                

            
            </div>
        </div>
    </div>
    <!-- mission vision import export END -->










    <div class="feature-area gray-bg section-padding-100-50" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/1.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Services</h4>
                            <p class="mb-0">"BlueNova Import Export" has the goal to represent your 
                                products on a national and international level. Thanks to the wide network of partners around the world, your import 
                                and export of food products will surely be successful with us. Our customer list is always updated: we do not stop expanding
                                ......<a href="{{ url('service/exportimport/1')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/2.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Quick assistance</h4>
                            <p class="mb-0">BlueNova  Import Export is at your full disposal for the 
                                import or export of food products at any time. For questions and updates concerning your business, please contact our customer support and information desk. We will be happy to help you and respond to your requests as soon as possible.
                                ......
                                 <a href="{{ url('service/exportimport/2')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/3.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Professional team</h4>
                            <p class="mb-0">BlueNova Import Export team has all the necessary skills for the import and export of food products.
                                 We protect the image of companies that turn to us with a proposal 
                                 for importing or exporting food products and we are convinced that we fully protect their interests......
                                 <a href="{{ url('service/exportimport/3')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

              
            </div>
        </div>
    </div>
     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    