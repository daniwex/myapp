@extends('layouts.layout')

@section('content')
@include('layouts.nav')
           
        </div>
            <nav class="navbar navbar-expand navbar-light bg-dark text-light">
                <div class="container-fluid">
                    <ul class=" navbar-nav list-unstyled nav justify-content-center" style="height: 20px; font-size:15px font-family:Roboto, sans-serif;">
                        <li class="nav-item active" style="margin-right: 10px"><a href={{{ asset('usedition') }}} style="text-decoration:none">US Edition</a></li>
                        <li class="nav-item" style="margin-right: 10px">Hot topics</li>
                        <li class="nav-item" style="margin-right: 10px">Coronavirus</li>
                        <li class="nav-item" style="margin-right: 10px">UK</li>
                        <li class="nav-item" style="margin-right: 10px">Brexit</li>
                        <li class="nav-item" style="margin-right: 10px">World</li>
                        <li class="nav-item" style="margin-right: 10px">Climate Change</li>
                        <li class="nav-item" style="margin-right: 10px">Business</li>
                        <li class="nav-item" style="margin-right: 10px">Football</li>
                        <li class="nav-item" style="margin-right: 10px">Sports</li>
                        <li class="nav-item" style="margin-right: 10px">Entertainment</li>
                        <li class="nav-item" style="margin-right: 10px">Tech</li>
                        <li class="nav-item" style="margin-right: 10px">Science</li>
                        <li class="nav-item" style="margin-right: 10px">My NewsNow</li>
                    </ul>
               </div>
            </nav>
    
        <div class="container" style="padding-top: 50px">
                <div class="row"> 
                    <div class="col-sm-2"> 
                       
  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-bars card-link" data-toggle="collapse" href="#collapseOne"></i>
      </div>
      <div id="collapseOne" class="collapse-show" data-parent="#accordion">
        <div class="card-body">
            <p><a href="#home" class="links">My Most Viewed</a></p>
            <hr>
            <p><a href="#home" class="links">Home</a></p>
            <hr>
            <p><a href="#home" class="links">Entertainment</a></p>
            <hr>
        
            <ul>
                <li>Gaming</li>
                <li>TV</li>
                <li>Music</li>
                <li>Film</li>
                <li>Fashion Icons</li>
                <li>Celebrity News</li>
                <li>Anime</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
                   
                    
                 </div> 
                        <div class="col-sm-8">
                    <h1 class="linked"><a href="#home" class="link"> Entertainment <i class="fas fa-chevron-right" style="font-size:30px;"></i></a></h1>
                    <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi quos autem, ea in necessitatibus dolorum ullam dolores provident veritatis! Saepe.</p>
                    </div>
                    <div class="col-sm-2">
                    <h2> Top Stories</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <h2> Most Read</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                    <h2> In The News Now</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita!</p>
                </div>
        </div>
    </div>
    @include('layouts.footer') 
@endsection



