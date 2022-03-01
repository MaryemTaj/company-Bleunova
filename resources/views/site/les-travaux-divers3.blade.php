<!-- branche navarre service( extend=> menu.blade.php) -->

@extends('master')
    @section('content')
<br><br><br><br>
<div class="container">
  <div class="row justify-content-center  section-padding-50-50 ">
    <h4 class="">Materials</h4>
  </div>
</div>
<div class="container">
  <div class="row text-center section-padding-100-50">
  <div class="col-md-6 col-lg-3  "> 
      <div class="shadow-lg  mb-5 bg-light rounded border "> 
        <img src="{{ asset('img/materials-constr/camion.png') }}" alt="" style="width:5rem" class="">
        <h4>Camion</h4>
       
      </div>  
    </div>


    <div class="col-md-6 col-lg-3  "> 
      <div class="shadow-lg  mb-5 bg-light rounded border hover"> 
        <img src="{{ asset('img/materials-constr/grues.png') }}" alt="" style="width:5rem" class="">
        <h4>Grues</h4>
       
      </div>  
    </div>


    <div class="col-md-6 col-lg-3  "> 
      <div class="shadow-lg  mb-5 bg-light rounded border "> 
        <img src="{{ asset('img/materials-constr/bettonniere.png') }}" alt="" style="width:5rem" class="">
        <h4>Betonniere</h4>
      
      </div>  
    </div>


    <div class="col-md-6 col-lg-3  "> 
      <div class="shadow-lg  mb-5 bg-light rounded border "> 
        <img src="{{ asset('img/materials-constr/manu.jpg') }}" alt="" style="width:5rem" class="">
        <h4>Manutention</h4>
       
      </div>  
    </div>

    <div class="col-md-6 col-lg-3  "> 
      <div class="shadow-lg  mb-5 bg-light rounded border "> 
        <img src="{{ asset('img/materials-constr/charg.png') }}" alt="" style="width:5rem" class="">
        <h4>Chargeur</h4>
       
      </div>  
    </div>

  </div>

</div>


<!-- header -->
    
    <!--================ Blog Area end =================-->
     <!--================réalisé par anwar mohamed elkahza =================-->

    @endsection
