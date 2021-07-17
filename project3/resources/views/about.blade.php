@extends('layouts.index')

@push('styles')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
@endpush

@section('contents')

<main class="jumbotron">
    <div class="img-wrapper">
        <img src="{{ asset('pictures/pexels-cottonbro-4046303.jpg') }}" alt="a pic" style="opacity:0.86">
    </div>
</main>
<div class="content-descrip">
    <h1>
        We want you to get the care you deserve.
    </h1><br>
</div>


<section class="section-12">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="content-w-1" data-aos="fade-in" data-aos-duration="1000"> 
                    <h1>Transforming mental healthcare</h1><br>
                    <div class="content-w-2  text-muted">
                        We are a group of doctoral-level psychologists and psychiatrists who provide quality mental health care.
                         As a mental health collective, we assist members by providing therapy, medication management, coaching, and more.
                          We help our clients connect with one of our doctors who can meet their needs and is available online or in-person.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-w-1" data-aos="fade-in" data-aos-duration="1000">
                    <img src="{{ asset('pictures/image-2.jpeg') }}" alt="a pic">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="img-w-2" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    <img src="{{ asset('pictures/image-3.jpeg') }}" alt="a pic">
                </div>
            </div>
            <div class="col-md-6"  data-aos-duration="1000"  data-aos="fade-in">
                <div class="content-w-3">
                    <h1>A modern approach</h1><br>
                    <div class="content-w-4  text-muted" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                        It’s essential for us that our clients get personalized suggestions on who from our team is the best match.
                         Rather than do things the typical way, we’ve created a system designed around our patients’ needs. 
                    </div>
                    <div class="content-w-3-link" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="80">
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-13 mt-5">
    <div class="container-fluid">
        <div class="row" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
            <div class="col text-muted text-center">
                <h1>Our rates</h1>
            </div>
        </div>
        <div class="row row-1">
            <div class="col-md-6" data-aos="fade-in" data-aos-duration="2000">
                <div class="con-w-1 text-center text-muted">
                    <h2>Talk therapy</h2>
                </div>
            </div>
            <div class="col-md-6">
                <p class="para-1" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    Online or in-person, this is designated for individuals to process and explore their thoughts. 
                    Typically, meetings are weekly or bi-weekly. 
                </p>
                <div class="charge-rate" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="60">
                    <ul class="charge-rate-list">
                        <li>60 mins</li>
                        <li>300$</li>
                        <li><a href="#">Get started</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-1">
            <div class="col-md-6" data-aos="fade-in" data-aos-duration="1000">
                <div class="con-w-1 text-center text-muted">
                    <h2>Psychiatric session</h2>
                </div>
            </div>
            <div class="col-md-6">
                <p class="para-1" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    Online or in-person, this time will be spent evaluating your physical 
                    and mental health to provide medication to alleviate mental health symptoms. 
                    This does not include talk therapy.
                </p>
                <div class="charge-rate" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="60">
                    <ul class="charge-rate-list">
                        <li>45 mins</li>
                        <li>250$</li>
                        <li><a href="#">Get started</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-1">
            <div class="col-md-6">
                <div class="con-w-1 text-center text-muted" data-aos="fade-in" data-aos-duration="1000">
                    <h2>Coaching session</h2>
                </div>
            </div>
            <div class="col-md-6">
                <p class="para-1" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    Online or in-person, this session will help you with what you care most
                     about and develop a plan to achieve personal and professional goals.
                </p>
                <div class="charge-rate" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="60">
                    <ul class="charge-rate-list">
                        <li>50 mins</li>
                        <li>200$</li>
                        <li><a href="#">Get started</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-1">
            <div class="col-md-6">
                <div class="con-w-1 text-center text-muted" data-aos="fade-in" data-aos-duration="1000" >
                    <h2>Acupuncture session</h2>
                </div>
            </div>
            <div class="col-md-6">
                <p class="para-1" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    In-person only, this session helps alleviate pain
                     and treat various physical, mental, and emotional conditions.
                </p>
                <div class="charge-rate"data-aos="fade-in" data-aos-duration="1000" data-aos-delay="60">
                    <ul class="charge-rate-list">
                        <li>60 mins</li>
                        <li>250$</li>
                        <li><a href="#">Get started</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-14">
    <div class="container-fluid">
        <div class="row row-2">
            <div class="col-md-6">
                <div class="cont">
                    <div class="heading-1" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                        <h1>Check your insurance.</h1>
                    </div><br>
                    <div class="cont-1" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                        <p>We usually take many commonly known insurances.</p> <br>
                        <p><strong> your plan not on the list? </strong> Fill out the form with your insurance
                             information and we’ll be in touch shortly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="100">
                <fieldset>
                    <Label for="name" style="font-weight: 400">Name<sup style="font-size:18px;">*</sup></Label><br>
                        <div class="input-text-1">
                            <input type="text" name="Name" id="first">
                            <input type="text" name="Name">
                        </div>
                        <div class="under-text-1">
                            <span class="first-text" style="font-weight: 400">FirstName</span>
                            <span class="second-text" style="font-weight: 400">LastName</span>
                        </div><br>
                        <Label for="E-mail" style="font-weight: 400">Email<sup style="font-size:18px;">*</sup></Label><br>
                            <input type="email" name="E-mail"><br><br>
                            <div class="phone">
                                <Label for="Phone-num" style="font-weight: 400">Phone<sup style="font-size:18px;">*</sup></Label><br>
                                <input type="text" name="Phone-num">
                                <input type="text" name="Phone-num">
                                <input type="text" name="Phone-num">
                            </div><br><br>
                        <Label for="Message" style="font-weight: 400">Message<sup style="font-size:18px;">*</sup></Label><br>
                            <textarea name="Message" cols="30" rows="10" class="textarea-1"></textarea><br><br>
                            <button class="submit-btn">send</button>
                </fieldset>
            </div>
        </div>
    </div>
</section>

<section class="section-11">
    <div class="container-fluid">
        <div class="row">
            <div class="col" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                <div class="large-text text-center">
                    <h1>Get started with Clove, today.</h1> 
                </div> 
               <div class="text-center inner-link-6"data-aos="fade-in" data-aos-duration="2000" data-aos-delay="80">
                   <a href="/contact" class="text-white">Book A Consultation <i class="fa fa-arrow-right"></i></a>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection