@extends('layouts.index')

@push('styles')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
@endpush

@section('contents')

<main class="jumbotron">
    <div class="img-wrapper " style="width:1440px">
        <img src="{{ asset('pictures/4295312.jpg') }}" alt="a pic" style="opacity:0.86;width:1440px;height:854px">
    </div>
</main>
<div class="content-descrip text-dark">
    <h1>
        Find the therapist that best suits your needs.
    </h1><br>
</div>

<section class="section-15">
    <div class="container-fluid row-3">
        <div class="row" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="30">
            <div class="col text-center">
                <p> <h1>Our team</h1></p>
            </div>
        </div>
        <div class="row" style="margin-top: 60px">
            <div class="col-md-6" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="img-w-3">
                    <img src="{{ asset('pictures/pexels-daniel-xavier-1239291.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6"  data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="write-up">
                    <h4 class="text-muted">THERAPY, COACHING</h4><br>
                    <p>
                        <h2>Tai Schell, PHD</h2>
                    </p><br>
                    <p>
                        It all begins with an idea. Maybe you want to launch a business. Maybe you want to turn a hobby into something more. 
                        Or maybe you have a creative project to share with the world. Whatever it is, the way you tell your story online can make all the difference. 
                    </p> <br>
                    <div class="col-links">
                        <p>
                            <a href="">E-mail</a> -
                            <a href="">Linkedln</a> -
                            <a href="">Facebook</a> 
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
            <div class="row" style="margin-top:100px">
                <div class="col-md-6" data-aos="fade-in" data-aos-duration="2000"  data-aos-delay="100">
                    <div class="write-up">
                        <h4 class="text-muted">THERAPY, PSYCHIATRY, COACHING</h4><br>
                        <p>
                            <h2>Larissa O’Connor, MD</h2>
                        </p><br>
                        <p>
                            It all begins with an idea. Maybe you want to launch a business. Maybe you want to turn a hobby into something more. 
                            Or maybe you have a creative project to share with the world. Whatever it is, the way you tell your story online can make all the difference. 
                        </p> <br>
                        <div class="col-links">
                            <p>
                                <a href="">E-mail</a> -
                                <a href="">Linkedln</a> -
                                <a href="">Facebook</a> - 
                                <a href="">Instagram</a>
                            </p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6"  data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                    <div class="img-w-3">
                        <img src="{{ asset('pictures/pexels-andrea-piacquadio-3769021.jpg') }}" alt="">
                    </div>
                </div>
            </div>    
            <div class="row"  style="margin-top:100px" >
                <div class="col-md-6" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                    <div class="img-w-3">
                        <img src="{{ asset('pictures/pexels-stefan-stefancik-91227.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6"  data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                    <div class="write-up">
                        <h4 class="text-muted">PSYCHIATRY, COACHING</h4><br>
                        <p>
                            <h2>Emmett Marsh, PHD</h2>
                        </p><br>
                        <p>
                            It all begins with an idea. Maybe you want to launch a business. Maybe you want to turn a hobby into something more. 
                            Or maybe you have a creative project to share with the world. Whatever it is, the way you tell your story online can make all the difference. 
                        </p> <br>
                        <div class="col-links">
                            <p>
                                <a href="">E-mail</a> -
                                <a href="">Linkedln</a> -
                                <a href="">Facebook</a>      
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
                <div class="row"  style="margin-top:100px">
                    <div class="col-md-6"  data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                        <div class="write-up">
                            <h4 class="text-muted">ACUPUNCTURE</h4><br>
                            <p>
                                <h2>Lana Vargas, ND, LAc</h2>
                            </p><br>
                            <p>
                                It all begins with an idea. Maybe you want to launch a business. Maybe you want to turn a hobby into something more. 
                                Or maybe you have a creative project to share with the world. Whatever it is, the way you tell your story online can make all the difference. 
                            </p> <br>
                            <div class="col-links">
                                <p>
                                    <a href="">E-mail</a> -
                                    <a href="">Instagram</a>
                                </p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-6"  data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                        <div class="img-w-3">
                            <img src="{{ asset('pictures/pexels-vinicius-wiesehofer-1090387.jpg') }}" alt="">
                        </div>
                    </div>
                </div>    
    </div>

</section>

<section class="section-11">
    <div class="container-fluid">
        <div class="row">
            <div class="col" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="75">
                <div class="large-text text-center">
                    <h1>Get started with Clove, today.</h1> 
                </div> 
               <div class="text-center inner-link-6"data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                   <a href="/get-started" class="text-white">Book A Consultation <i class="fa fa-arrow-right"></i></a>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection