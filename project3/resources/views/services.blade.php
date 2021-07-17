@extends('layouts.index')

@push('styles')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
@endpush

@section('contents')

<main class="jumbotron">
    <div class="img-wrapper">
        <img src="{{ asset('pictures/pexels-karina-zhukovskaya-7260333.jpg') }}" alt="a pic" style="opacity:0.86">
    </div>
</main>
<div class="content-descrip">
    <h1>
        Get treatment for all your mental healthcare needs.
    </h1><br>
</div>


<section class="section-9 mt-6 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center mt-5"data-aos="fade-in" data-aos-duration="1000">
                <h1>Our Services</h1>
            </div>
        </div>
        <div class="row" style="margin-top:150px;padding-left:30px" >
            <div class="col-md-6">
                <div class="img-wrapper-3 text-center" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    <img src="{{ asset('pictures/Therapy1.png') }}" alt="" style="width:100%;">
                </div>
                <div class="img-descrip-3 text-center text-dark" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    <p>Therapy</p>
                     <div class="descrip-2 text-muted">
                    It all begins with an idea. Maybe you want to launch a business. 
                    Maybe you want to turn a hobby into something more. 
                    Or maybe you have a creative project to share with the world.
                     Whatever it is, the way you tell your story online can make all the difference. 
                     <p class="text-center">60 mins |  $300 </p>
                </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="img-wrapper-3" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                    <img src="{{ asset('pictures/Pills 1.png') }}" alt="" style="width:100%">
                </div>
                <div class="img-descrip-3 text-center text-dark " data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                    <p>Psychiatry</p> 
                    <div class="descrip-2 text-muted">
                        It all begins with an idea. Maybe you want to launch a business. 
                        Maybe you want to turn a hobby into something more. 
                        Or maybe you have a creative project to share with the world.
                         Whatever it is, the way you tell your story online can make all the difference. 
                         <p class="text-center">45 mins |  $250   </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="img-wrapper-3" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                    <img src="{{ asset('/pictures/Coaching1.png') }}" alt="" style="width:100%;">
                </div>
                <div class="img-descrip-3 text-center text-dark ">
                    <p>Coaching</p>
                    <div class="descrip-2 text-muted" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                        It all begins with an idea. Maybe you want to launch a business. 
                        Maybe you want to turn a hobby into something more. 
                        Or maybe you have a creative project to share with the world.
                         Whatever it is, the way you tell your story online can make all the difference. 
                         <p class="text-center">50 mins |  $200   </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-wrapper-3" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                    <img src="{{ asset('pictures/Accupuncture 1.png') }}" alt="" style="width:100%">
               </div>
               <div class="img-descrip-3 text-center text-dark " data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                   <p>Accupuncture</p>
                   <div class="descrip-2 text-muted">
                    It all begins with an idea. Maybe you want to launch a business. 
                    Maybe you want to turn a hobby into something more. 
                    Or maybe you have a creative project to share with the world.
                     Whatever it is, the way you tell your story online can make all the difference. 
                     <p class="text-center">60 mins |  $250 </p>
                </div>
               </div>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="inner-link-5 text-center" >
                    <a href="#">Book A Consulatation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('pictures/pexels-miguel-arcanjo-saddi-972217.jpg') }}" alt="a pic">
            </div>
            <div class="col-md-4">
                <div class="quote-container">
                            <blockquote>
                                <h2>
                                    <q>I underestimated how hard it would be adjusting to working from home, 
                                        but with Dr. Schell’s help, I was able to regain focus.</q>
                                </h2> 
                            </blockquote>
                            <figcaption data-aos="fade-in" data-aos-duration="3000" data-aos-delay="80">
                                &mdash; OLIVIA R., CLOVE CLIENT
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-11">
    <div class="container-fluid">
        <div class="row">
            <div class="col" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                <div class="large-text text-center">
                    <h1>Questions before getting started?</h1> 
                </div> 
               <div class="text-center inner-link-6"data-aos="fade-in" data-aos-duration="2000" data-aos-delay="80">
                   <a href="/contact" class="text-white">Get In Touch. <i class="fa fa-arrow-right"></i></a>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection