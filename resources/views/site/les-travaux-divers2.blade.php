<!-- branche navarre service( extend=> menu.blade.php) -->

@extends('master')
    @section('content')
<br><br><br><br>

<div class="container section-padding-10">
    <div class="row">
        <div class="col-12">
            <div class="col-md-6 col-lg-12">
               
                <div class="animate__animated animate__bounceInUp   wow zoomIn" data-wow-delay="0.2s">
                    <h3 style="font-family:Times New Roman, Times, serif;"> {{__('all_project')}}  </h3> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header -->
        <div class="call-to-desc-area">
            <div class="container section-padding-100">                
                 <div class="call-to-action-area">
                      <!-- Projet maroc start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="call-to-title text-center mb-50">
                                    <h2 class="text-black mb-0  wow zoomIn  animate__pulse">{{__('morocco')}}</h2>
                                </div>
                            </div>
                        </div>     
                       
                        <!-- start Content -->
                        <div class="row justify-content-center">                          
                                <div class=" " style="width: 5rem; margin-right:3%"  >
                                    <img src="{{ asset('img/projet-constr/africa-gaz.png') }}" class="card-img-top" alt="..."  >
                                 
                                </div>
                                                   
                                <div class="" style="width: 5rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/marocgaz.jpg') }}" class="-img-top" alt="...">                                       
                                </div>
                          
                                <div class="" style="width: 5rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/algha-assurance.jpg') }}" class="-img-top" alt="...">                                       
                                </div>
                                                    
                                <div class="" style="width: 5rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/idemia.jpg') }}" class="card-img-top" alt="...">                                       
                                </div>

                                <div class="" style="width: 10rem; margin-right:3%">
                                    <img src="{{ asset('img/projet-constr/akwa.jpg') }}" class="card-img-top" alt="...">                                       
                                </div>                               
                        </div>  
                        <!-- end projet maroc -->
                        <!-- projet qatar start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="call-to-title text-center mb-50">
                                    <h2 class="text-black mb-0  wow zoomIn  animate__pulse">Qatar</h2>
                                </div>
                            </div>
                        </div>     
                          <!-- Single Content -->
                        <div class="row justify-content-center">                           
                            <div class=" " style="width: 5rem; margin-right:3%"  >
                                <img src="{{ asset('img/projet-constr/four-Seasons.jpg') }}" class="card-img-top" alt="..."  >
                            </div>
                       </div> 
                        <!-- Single Content --> 
                        <!-- projet qatar start -->
                 </div>
            </div>
        </div>
    <!--================ Blog Area end =================-->
     <!--================réalisé par anwar mohamed elkahza =================-->

    @endsection
