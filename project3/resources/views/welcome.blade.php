@extends('layouts.index')

@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

@section('contents')
<main class="jumbotron">
    <div class="img-wrapper">
        <img src="{{ asset('pictures/pexels-alex-green-5699475.jpg') }}" alt="a pic" style="opacity:0.76">
    </div>
</main>
<div class="content-descrip">
    <h1>
        Introducing Clove, a mental health collective.
    </h1><br>
    <p style="font-size: 1.5em">
        Get accessible and personalized mental healthcare 
        in-person or from the comfort of your home. 
    </p>
</div>

    <section class="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="content-container">
                        <div class="fade-in" data-aos="fade-in" data-aos-duration="1000"><h1>Our approach</h1></div>
                        <p data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50" data-aos-easing="ease-in">
                            We are a group of doctoral-level psychologists and psychiatrists 
                            who provide quality mental health care. As a mental health collective, 
                            we assist members by providing therapy, medication management, coaching, and more. Let us help you connect with one of our doctors who meets your needs and is available to see you, online or in-person.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2"data-aos="fade-in" data-aos-duration="3000">
                    <div class="inner-link-1 text-white text-center"  >
                        <a href="#">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="container-fluid">
            <div class="row" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="50">
                <div class="col-md-6" >
                    <img src="{{ asset('pictures/pexels-pavel-danilyuk-6712683.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="sect-2-cont">
                        <h1>Providing you with a safe space to relax</h1>
                        <p>
                            All your appointments will take place in our soothing office 
                            environment with fully private rooms, complimentary tea and water, 
                            and individualized care. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="section-3">
        <div class="container-fluid">
            <div class="row" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="50">
                <div class="col-md-5">
                        <div class="sect-3-cont">
                            <h1>In-person and remote options</h1>
                            <p>
                                Our office is conveniently located in Manhattan. Can’t make it into the office? 
                                No worries – we’ve got you covered with teletherapy. 
                            </p>
                         </div>
                </div>
                <div class="col-md-7">
                    <div class="map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3964.5146206932973!2d3.421816314928682!3d6.4562877257318245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1626201391318!5m2!1sen!2sng" width="680" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        {{-- <iframe src="https://studio.here.com/viewer/?project_id=75626f0c-034d-4fe8-aedf-252be646d3cb" frameborder="0" style="width:100%;height:700px"></iframe> --}}
                        {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1q-FFgZdrybDyaxrlydnfv3G6lOlv9NY4" width="680" height="700"></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4 mt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center text-white mt-5"data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    <h1>Our services</h1>
                </div>
            </div>
            <div class="row" style="margin-top: 70px" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="100">
                <div class="col-md-3">
                    <div class="img-wrapper-1" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                        <img src="{{ asset('/pictures/Coaching.png') }}" alt="" style="width:100%;">
                    </div>
                    <div class="img-descrip text-center text-white ">
                        <p>Coaching</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="img-wrapper-1">
                         <img src="{{ asset('pictures/Accupuncture.png') }}" alt="" style="width:100%">
                    </div>
                    <div class="img-descrip text-center text-white ">
                        <p>Accupuncture</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrapper-1">
                        <img src="{{ asset('pictures/Pills.png') }}" alt="" style="width:100%">
                    </div>
                    <div class="img-descrip text-center text-white ">
                        <p>Psychiatry</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrapper-1">
                        <img src="{{ asset('pictures/Therapy.png') }}" alt="" style="width:100%">
                    </div>
                    <div class="img-descrip text-center text-white ">
                        <p>Therapy</p>
                    </div>
                </div>
                
            </div>
            <div class="row mt-4">
                <div class="col-md-2" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="50">
                    <div class="inner-link text-white text-center" >
                        <a href="#">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-5 mt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center mt-5"data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    <h1>Meet Our Team</h1>
                </div>
            </div>
            <div class="row" style="margin-top: 70px;padding-left:30px" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="100">
                <div class="col-md-3">
                    <div class="img-wrapper-2" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                        <img src="{{ asset('/pictures/image-asset.jpeg') }}" alt="" style="width:100%;">
                    </div>
                    <div class="img-descrip text-center">
                        <p>Tai Schell, PSY.D</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="img-wrapper-2">
                         <img src="{{ asset('pictures/image-asset 1.jpeg') }}" alt="" style="width:100%">
                    </div>
                    <div class="img-descrip text-center">
                        <p>Larissa O’Connor, MD</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrapper-2">
                        <img src="{{ asset('pictures/image-asset 2.jpeg') }}" alt="" style="width:100%">
                    </div>
                    <div class="img-descrip text-center ">
                        <p>Emmett Marsh, PHD</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrapper-2">
                        <img src="{{ asset('pictures/image-asset 3.jpeg') }}" alt="" style="width:100%">
                    </div>
                    <div class="img-descrip text-center ">
                        <p>Lana Vargas, ND, LAc</p>
                    </div>
                </div>
                
            </div>
            <div class="row mt-4">
                <div class="col-md-2" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="50">
                    <div class="inner-link-2 text-center" >
                        <a href="#">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-6">
        <div class="container-fluid">
            <div class="row">
                <div class="col" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                    <figure class="quote">
                        <blockquote>
                            <h1>
                                <q>Clove helped me find a therapist that I connected with, whose services
                                 aligned with my needs, and who was flexible with their scheduling. Clove helped me
                                  check off all the boxes.</q>
                                </h1> 
                        </blockquote>
                        <figcaption data-aos="fade-in" data-aos-duration="3000" data-aos-delay="80">
                            &mdash; LUISA H., CLOVE CLIENT
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="section-7 mt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center mt-5"data-aos="fade-in" data-aos-duration="1000" data-aos-delay="50">
                    <h1>Our Blog</h1>
                </div>
            </div>
            <div class="row" style="margin-top: 70px;padding-left:30px;padding-right:30px" data-aos="fade-in" data-aos-duration="3000" data-aos-delay="100">
                <div class="col-md-3">
                    <div class="img-wrapper-3" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                        <a href="#"><img src="{{ asset('pictures/pexels-olya-kobruseva-5281238.jpg') }}" alt="" style="width:100%;"></a>
                    </div>
                    <div class="img-descrip text-center">
                        <p><h4>This Morning Routine Will Improve Your Mood</h4></p> <br>
                        <div class="link-inner">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="img-wrapper-3">
                        <a href="#"><img src="{{ asset('pictures/pexels-ketut-subiyanto-4473612.jpg') }}" alt="" style="width:100%"></a>
                    </div>
                    <div class="img-descrip text-center">
                        <p><h4>How to Take An Effective Mental Health Day Off</h4></p> <br>
                        <div class="link-inner">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrapper-3">
                        <a href="#"><img src="{{ asset('pictures/pexels-atul-choudhary-2868257.jpg') }}" alt="" style="width:100%"></a>
                    </div>
                    <div class="img-descrip text-center ">
                        <p><h4>Exercises To Calm Your Anxious Thoughts</h4></p> <br>
                        <div class="link-inner">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrapper-3">
                        <a href="#"><img src="{{ asset('pictures/pexels-life-of-pix-7640.jpg') }}" alt="" style="width:100%"></a>
                    </div>
                    <div class="img-descrip text-center ">
                        <p><h4>The Beginners Guide to Meditation</h4></p> <br>
                        <div class="link-inner">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    {{-- <section class="section-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="50">
                    <div class="large-text text-center">
                        <h1>Get started with Clove, today. </h1> 
                    </div> <br>
                   <div class="text-center inner-link-3"data-aos="fade-in" data-aos-duration="2000" data-aos-delay="80">
                       <a href="" class="text-white">Book a Consultation</a>
                   </div>
                </div>
            </div>
        </div>
    </section> --}}
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

