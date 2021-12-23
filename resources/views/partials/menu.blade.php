<!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="{{ url('/') }}">
                                       
                                        <img src=" {{ asset('img/BlueNova.png') }}" alt="" style="width: 180px;">
                                            <!-- <img src="img/BlueNova.png" alt="" style="width: 180px;"> -->
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ url('/about') }}">About</a></li>
                                                <li><a href="#">Service <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <!-- @yield('menu') -->
                                                        <li><a href="{{url('/service/travaux')}}">Les Travaux Divers</a></li>
                                                        <li><a href="{{url('/service/exportimport')}}">Export Import</a></li>
                                                        <li><a href="{{url('/service/it')}}">it-solution</a></li>
                                                    </ul>
                                               </li>
                                                
                                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
     <!--================réalisé par anwar mohamed elkahza =================-->
