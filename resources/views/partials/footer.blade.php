

    <!-- Footer Contact Area -->
    <div class="footer-contact-area section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <div class="footer-logo">
                        
                            <a href="#">  <img src=" {{ asset('img/BlueNova.png') }}" alt="" style="width: 200px;"></a>
                        </div>
                        <p class="mt-30">{{__('follow_us')}}</p>
                        <!-- Contact Icon -->
                        <div class="footer-contact-icon">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=212668044603&text=Bluenova"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>{{__('about_company')}}</h4>
                        <ul>
                            
                            <li><a href="{{ url(app()->getLocale().'/about') }}">{{__('name_company')}}</a></li>
                          
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>Services</h4>
                        <ul>
                        <li><a href="{{url(app()->getLocale().'/service/exportimport')}}">{{__('service-import-export_title')}} </a></li>
                        <li><a href="{{url(app()->getLocale().'/service/travaux')}}">{{__('service-construction_title')}}</a></li>
                        <li><a href="{{url(app()->getLocale().'/service/it')}}">{{__('service-it_title')}}</a></li>
                        <li><a href="{{url(app()->getLocale().'/service/realEstate')}}">{{__('service-real-estate_title')}}</a></li>
                       
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget -->
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>Contact info</h4>
                        <ul>
                            <li><a href="#"><i class="ti-location-pin"></i>Casablanca, {{__('morocco')}}</a></li>
                            <li><a href="#"><i class="ti-pin2"></i>181,Street Abdelmoumen,Res <br>,Al Yamama C, 1st floor,Hospital hanche, Casablanca</a></li>
                            <li><a href="mailto:Fadel.boukined@bluenova.ma"><i class="ti-email"></i>Contact@bluenova.ma</a></li>
                            <li><a href="tel:+212668044603"><i class="ti-mobile"></i> </a></li>
                            <li><a href="#"><i class="ti-location-pin"></i> ti-world</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Contact Area -->

    <!-- Copy Right Area -->
    <div class="copy-right-area">
        <div class="container">
            <div class="row">
                <!-- Copy Right Menu -->
                <div class="col-md-6">
                    <div class="copy-right-menu">
                        <ul>
                            <li><a href="app()->getLocale()/service/company-policy">{{__('privacy')}}</a></li>
                            <li><a href="#">Faq's</a></li>
                            <li><a href="#">Get a Quote</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Copy Right Content -->
                <div class="col-md-6 text-right mt-sm-cu-30">
                    <div class="copy-right-content">
                        <p>{{__('copyright')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--================réalisé par anwar mohamed elkahza =================-->
