@extends('layouts.loginlay')

@section('content')
<div class="red-top" style="background-color: rgb(175, 36, 36); padding:5px;" ></div>
        <nav class="navbar navbar-expand navbar-light link-class">
            <div class="container-fluid">
              <a class="navbar-brand " href="{{asset('home')}}"><img src=" {{asset('pictures/nn-logo-inline.svg')}}" alt="a picture" style="width: 200px; height: 50px"></a>
            </div>
        </nav>
    @csrf
  <div class="container changeMargin">
    <div class ="row">
      <div class=" col-4">
<fieldset> 
    <h2><label id="sign-in">Sign-in</label></h2>
    <form action="/home" method="GET">  
        <label for="username"> Username<br> </label>
            <input type="text" name="username" required> <br><br>
        <label for="password"> Password <br> </label>
            <input type="password" name="password" required> <br>
        <label for="remember-me"> remember me
            <input type="checkbox" checked name="remember-me"> 
        <a href="#forgotpass"> Forgot your password?</a>
        <button type="submit">Sign in <i class="fas fa-sign-in-alt"></i></button>
     </form>
</fieldset>
</div>            
<div class ="col">
<div id="demo" class="carousel slide pic-slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video width="100%" autoplay> 
          <source src="{{ asset('pictures/pexels-rodnae-productions-7187061.mp4') }}" type="video/mp4"> 
       </video> 
      </div>
      <div class="carousel-item">
        <video width="100%" autoplay> 
          <source src="{{ asset('pictures/pexels-joseph-a-eulo-5286277.mp4') }}" type="video/mp4"> 
       </video> 
      </div>
      <div class="carousel-item">
        <img src="{{asset('pictures/pexels-christina-morillo-1181421.jpg')}}" alt="Los Angeles" style="width: 690px; height:410px" >
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
</div>
  </div>
    </div>
  </div>
  
  @include('layouts.footer') 
  @endsection
  <style>
    body{margin: 0px; padding: 0px;}
    fieldset{width:100%;font-family: 'Raleway', sans-serif;}
    form{width: 100%; padding-top: 20px; padding-right:20px}
    #sign-in{
        text-align: center;
    }
    input[type='text'], input[type='password']{
        width:100%;
        border-top: 3px solid gray;
        /* border-right: 5px; */
        padding: 12px;
        height: 40px;    
    }
    fieldset{
        box-shadow:10px 10px 10px grey;
    }
    input[type='checkbox']{
        margin-top: 10px;
    }
    a{
        margin-left: 53px;
        color: rgb(122, 178, 243);
    }
    button{
        width: 100%;
        background-color: rgb(8, 63, 184);
        border-bottom: 1px solid blue;
        color: white;
        margin-top: 50px;
        height: 70px;
        border-radius: 25px; 
    } 
     button:hover{opacity: 0.8;}
    .link-class{
      padding: 10px;
      box-shadow:10px 10px 10px grey;
      padding-bottom: 20px;
      margin-bottom: 40px;
    } 
    .pic-slide{
      width:100%;
    }
    .changeMargin{
      margin-bottom: 15%; 
    }
    hr{
        color: white;
    }
    
    
    </style>