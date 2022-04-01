
<header>

                    <nav class="navbar fixed-top  navbar-expand-lg navbar-white bg-white  ">
                    <div class="container">
                                    <div class="logo ">
                                        <a href="{{ url('/') }}">
                                                                        
                                            <img class="" src=" {{ asset('img/BlueNova.png') }}" alt="" style="width: 310px;">
                                                                            
                                        </a>
                                    </div>

                    <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse container" id="navbarSupportedContent" style="margin-left:200px">
                        <ul class="navbar-nav mr-auto " id="navigation">

                        <li class="">
                            <a class="nav-link" href="{{ url('/') }}">{{__('home')}}</a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="{{ url(app()->getLocale().'/about') }}">{{__('about')}}</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url(app()->getLocale().'/service/exportimport')}}">{{__('service-import-export_title')}}</a>
                            <a class="dropdown-item" href="{{url(app()->getLocale().'/service/travaux')}}">{{__('service-construction_title')}}</a>
                           
                            <a class="dropdown-item" href="{{url(app()->getLocale().'/service/it')}}">{{__('service-it_title')}}</a>
                            <a class="dropdown-item" href="{{url(app()->getLocale().'/service/realEstate')}}">{{__('service-real-estate_title')}}</a>                            
                        </li>
                        <li class="">
                        
                            <a class="nav-link" href="{{url(app()->getLocale().'/blog')}}">{{__('blog')}}</a>
                        </li>
                        <li class="">
                        
                        <a class="nav-link" href="{{url(app()->getLocale().'/contact')}}">{{__('contact')}}</a>
                    </li>
                        </ul>
                        <div class="col-md-4">
                <div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ app()->getLocale() == 'fr'? 'Frensh':'English' }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ url(app()->getLocale() == 'fr'? 'en':'fr' ) }}"> {{ app()->getLocale() == 'fr'? 'English':'Frensh' }}</a>
            
                 </div>
              </div>
           
        </div>
            </div>
                    
                    </div>
                    </div>
                    </nav>
  
</header>



