
@extends('master')
    @section('content')


    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img" style="background-image: url({{url('img/about-us.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>{{__('about_company')}}</h2>
                            <p><a href="{{ url('/') }}">{{__('home')}} .</a> <span>{{__('about')}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="about-us-area section-padding-100" id="about" >
        
        <div class="container white-bg box" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
            <div class="row justify-content-center section-padding-40-40 animate__backInDown animated">
                <div class="col-md-5 mb-50">
                    <div class="why-we-thum ">
                    <img src="img/BlueNova.png" alt="" width="10px">
                        <img src="img/" alt="">
                    </div>
                </div>
            </div>    
            <div class="row justify-content-center   ">
                <div class="col-md-12">
                    <div class="why-we-content-text mb-50 ">
                        
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:18px">{{__('creation_date')}} : </b><p>29/10/2021</p> 
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:40px">{{__('legal_form')}} : </b> <p>Limited Liability Company (LLC) </p> 
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:60px">Address : </b><p>{{__('adress')}}</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:12px">Email : </b><p> Contact@bluenova.ma</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:110px">IF:   </b>  <p> 50570949</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:102px">TP:  </b> <p>34778406</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:95px">CR :</b><p>519383</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:95px">ICE:   </b><p> 00291148900052</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:80px">CNSS:  </b> <p>2853476</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:75px">{{__('team')}}: </b> <p> 8 employees</P>
                </div>
                <div class="row" style="margin-left:30px" >
                    <b style="margin-right:67px">{{__('capital')}}:   </b> <p>100 000,00dh</P>
                </div>
                    </div>
                </div>

                






                
            </div>

          
        </div>
    </div>
    <div class="about-us-area section-padding-50-50" id="about">
        <div class="container">
            <div class="row text-center">
               <div class="justify-content-center"><h1 class="mb-15">ORGANIZATION CHART</h1></div>
            <img src="img/orga.png" alt="">
                </div>
            </div>

          
        </div>
    </div>
    @endsection