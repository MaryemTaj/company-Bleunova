<!-- branche navarre service( extend=> menu.blade.php) -->

@extends('master')
    @section('content')
    <br>
    <div class="section-padding-100 bg-overlay-3">
      
    <h1 class="text-center">{{__('service-it_web')}}</h1>

    </div>
<div class="bg-white section-padding-50  ">
<div class="container box">
<div class="row justify-content-center  animated animate__fadeInUp   wow zoomIn" >
      <div class="col-sm-3  section-padding-50-50">
         <img src="{{ asset('img/img-it/dev-web.png') }}" alt="développement web">
    </div>
</div>   
<div class="row justify-content-center section-padding-0-100  animated animate__fadeInUp   wow zoomIn" > 
    <div class="col-md-8">
      <p class="text-center"><br>{{__('service-it_web_introduction1')}}<br><br>
      {{__('service-it_web_introduction2')}}<br><br>
      {{__('service-it_web_introduction3')}}

      </p>
    </div>
    </div>
    </div>   
</div>
</div>
<div class="section-padding-50 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-15"> 
            <div class="col-md-3">
               <h3  class="text-center border-mot">{{__('what_we_do_title')}} </h3>
            </div>
        </div>
   
        <div class="row justify-content-center "> 
             <div class="col-md-8">
                <p class="text-center">{{__('what_we_do_description_web')}}</p>
            </div>
        </div>
    </div>     
</div>
  
<!-- how we do it-->
<div class="gray-bg section-padding-0-100">
<div class="container">
<div class="row justify-content-center section-padding-50"> 
        <div class="col-md-3">
            <h3  class="text-center border-mot ">{{__('how_we_do_it')}}</h3>
        </div>
    </div>
</div>
<div class="timeline">
  <div class="containerr left">
   
    <i class="icon fa fa-home"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title1')}}</h2>
      <p>
     {{__('how_we_do_it_descriprion1')}}
      </p>
    </div>
  </div>
  <div class="containerr right">
    
    <i class="icon fa fa-gift"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title2')}}</h2>
      <p>
      {{__('how_we_do_it_descriprion2')}}  
    </p>
    </div>
  </div>
  <div class="containerr left">
    
    <i class="icon fa fa-user"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title3')}}</h2>
      <p>
      {{__('how_we_do_it_descriprion3')}}
      </p>
    </div>
  </div>
  <div class="containerr right">
   
    <i class="icon fa fa-cog"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title4')}}</h2>
      <p>
      {{__('how_we_do_it_descriprion4')}}
      </p>
    </div>
  </div>
  <div class="containerr left">
    
    <i class="icon fa fa-cog"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title5')}}</h2>
      <p>
      {{__('how_we_do_it_descriprion5')}}
      </p>
    </div>
  </div>
  <div class="containerr right">
    
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title6')}}</h2>
      <p>
      {{__('how_we_do_it_descriprion6')}}
      </p>
    </div>
  </div>

  <div class="containerr left">
    
    <i class="icon fa fa-cog"></i>
    <div class="content">
      <h2>{{__('how_we_do_it_title7')}}</h2>
      <p>
      {{__('how_we_do_it_descriprion7')}}
      </p>
    </div>
  </div>

</div>
</div>


<div class="section-padding-0-20 " style="background-color:#273d88">

</div>
<div class="bg-light section-padding-50">
    <div class="container ">
        <div class="row col-lg-11 col-11 justify-content-center ">
            <h3 class="">{{__('why_blue_nova')}} </h3>
            <p class="text-center">{{__('why_bluenova_description')}}</p>
        </div>
    </div>
</div>
<div class="bg-white section-padding-50" >
    <div class="container ">
        <div class="row justify-content-center  ">
            <div class="col-lg-2 section-padding-50  text-center bg-white border border-primary" >
                <div class=" " >
                <h6>{{__('why_bluenova1')}}</h6>
                </div>
            </div>
            <div class="col-lg-2 section-padding-50  text-center bg-white border border-primary">
                <div class="">
                 <h6>{{__('why_bluenova1')}}</h6>
                </div>
            
            </div>
            <div class="col-lg-2 section-padding-50  text-center bg-white border border-primary">
                <div class="">
                <h6>{{__('why_bluenova2')}}</h6>
                </div>
            </div>
            <div class="col-lg-2 section-padding-50  text-center bg-white border border-primary">
                <div class="">
                 <h6>{{__('why_bluenova3')}}</h6>
                </div>
            </div>
            <div class="col-lg-2 section-padding-50  text-center bg-white border border-primary">
                <div class="">
                <h6>{{__('why_bluenova4')}}</h6>
                </div>
            </div>
            <div class="col-lg-2 section-padding-50  text-center bg-white border border-primary">
                <div class="">
                <h6>{{__('why_bluenova5')}}</h6>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="gray-bg section-padding-50">
    <div class="container ">
        <div class="row col-lg-11 col-11 justify-content-center">
            <h3 class="text-center">{{__('have_you_project')}} </h3>
            <p class="text-center">{{__('have_you_project_description')}}<br>
                <b class="text-center">Note:</b>  Rest assured your project idea and details will remain confidential and will not be shared with anyone as part of our privacy policy
            </p>
       
        </div>
       <div class="row justify-content-center section-padding-50"><a href="{{ url('/contact')}}"><button class="btn boxed-btn">{{__('button_contact_us')}}</button></a></div> 
    </div>
</div>
            <!--<div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>WHY BLUE NOVA ?</h4>
                    </div>
                </div>
            </div>-->

           

    <!--================ Blog Area end =================-->
    <!--================réalisé par anwar mohamed elkahza =================-->

    @endsection
