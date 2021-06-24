@extends('layouts.index')
@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@section('content')   
    <div class="img-con">
      <img src="{{asset('pictures/styledbymide copy.png')}}" alt="pic logo" style ="width:25%"class="pt-5 pb-1 me-auto">
    </div>
                    
                     <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse me-auto-1 pl-5" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Men's wear
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Tousers</a></li>
                                <li><a class="dropdown-item" href="#">Tops</a></li>
                                <li><a class="dropdown-item" href="#">accessories</a></li>
                              </ul>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Women's wear
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">skirts</a></li>
                                <li><a class="dropdown-item" href="#">Tops</a></li>
                                <li><a class="dropdown-item" href="#">accessories</a></li>
                              </ul>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              unisex clothing
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">For her</a></li>
                                <li><a class="dropdown-item" href="#">For him</a></li>
                                {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                              </ul>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Fashion wear
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Latest trends</a></li>
                                <li><a class="dropdown-item" href="#">blog!</a></li>
                                {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
         
             <!-- Carousel wrapper -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('pictures/pexels-rodnae-productions-6191879.jpg')}}" class="d-block w-100"   style="width:inherit;height:600px">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('pictures/pexels-rodnae-productions-6191879.jpg')}}" class="d-block w-100"   style="width:inherit;height:600px">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('pictures/pexels-rodnae-productions-6191879.jpg')}}" class="d-block w-100"   style="width:inherit;height:600px">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>   
         

          <section class="img-section-1">
             <div class="container">
               <div class="row">
                  <div class="col">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.31.jpeg')}}" alt="pic logo" style="width:300px;height:424px">
                  </div>
                  <div class="col">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.34.jpeg')}}" alt="pic logo" style="width:300px;height:424px;">
                  </div>
                  <div class="col">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:300px;height:424px;">
                  </div>
                  <div class="col">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:300px;height:424px;padding-top:30px;">
                  </div>
                  <div class="col">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:300px;height:424px;padding-top:30px;">
                  </div>
                  <div class="col">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:300px;height:424px;padding-top:30px;">
                  </div>
               </div>
             </div>
          </section>
             <div class="write-up">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nam, maxime, neque voluptate in sapiente sit officiis alias qui sequi at illo vero aliquam? Tempora, blanditiis placeat cum quae ducimus saepe, aliquid, sed nulla aspernatur eveniet beatae porro debitis assumenda.</p>
             </div>
             <div class="hr-theme-slash-2">
              <div class="hr-line"></div>
                  Lorem, ipsum.
              <div class="hr-line"></div>
            </div>
            <section class="img-section-2">
              <div class="container">
                <div class="row" style="padding:20px 100px;margin-left:10px;margin-right:20px">
                   <div class="col-md-3">
                     <img src="{{asset('pictures/photo_2021-05-28 19.17.31.jpeg')}}" alt="pic logo" style="width:250px;height:424px">
                     <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                   </div>
                   <div class="col-md-3">
                     <img src="{{asset('pictures/photo_2021-05-28 19.17.34.jpeg')}}" alt="pic logo" style="width:250px;height:424px;">
                     <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                   </div>
                   <div class="col-md-3">
                     <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:250px;height:424px;">
                     <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                   </div>
                   <div class="col-md-3">
                     <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:250px;height:424px;padding-top:30px;">
                     <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                   </div>
                </div>
                <div class="row" style="padding:20px 100px;margin-left:10px;margin-right:20px">
                  <div class="col-md-3">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.31.jpeg')}}" alt="pic logo" style="width:250px;height:424px">
                    <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                  </div>
                  <div class="col-md-3">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.34.jpeg')}}" alt="pic logo" style="width:250px;height:424px;">
                    <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                  </div>
                  <div class="col-md-3">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:250px;height:424px;">
                    <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                  </div>
                  <div class="col-md-3">
                    <img src="{{asset('pictures/photo_2021-05-28 19.17.39.jpeg')}}" alt="pic logo" style="width:250px;height:424px;padding-top:30px;">
                    <span class="descrip-1">Lorem ipsum dolor sit amet.</span><br>
                     <span class="price-1">30$</span>
                  </div>
               </div>
           </section>
           <div class="hr-theme-slash-2">
            <div class="hr-line"></div>
                Lorem, ipsum.
            <div class="hr-line"></div>
          </div>
          <section class="img-section-3">
            <div class="container">
              <div class="row" style="margin-bottom:80px">
                 <div class="col-md-6">
                    <div class="card">
                      <div class="card--image">
                        <img src="{{asset('pictures/photo_2021-05-28 19.17.31.jpeg')}}" alt="pic logo" style="width:500px;height:800px">
                      </div>
                      <div class="card--info info--1">
                        <span class="info--text">SPACIOUS</span>
                        <div class="icon">
                          <i class="far fa-dot-circle"></i>
                        </div>
                        <div class="info--image">
                          <img src="https://source.unsplash.com/-HxIhfS_dUk" alt="info image">
                        </div>
                      </div>
                      <div class="card--info info--2">
                        <span class="info--text">ACCESSIBLE</span>
                        <div class="icon">
                          <i class="far fa-dot-circle"></i>
                        </div>
                        <div class="info--image">
                          <img src="https://source.unsplash.com/-HxIhfS_dUk" alt="info image">
                        </div>
                      </div>
                    </div>
                    <span class="descrip-2">Lorem ipsum dolor sit amet.</span><br>
                    <span class="price-2">30$</span>
                  </div>
                 <div class="col-md-6">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quo, excepturi expedita similique dolores eligendi delectus praesentium voluptatum harum aspernatu
                 </div>
              </div>
            </div> 
          </section>
@endsection
