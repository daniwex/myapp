<div class="red-top" style="background-color: rgb(175, 36, 36); padding:5px;" ></div>
<nav class="navbar navbar-expand navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{asset('home')}}"><img src=" {{asset('pictures/nn-logo-inline.svg')}}" alt="a picture" style="width: 200px; height: 50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <form class="d-flex" style="left: 200px">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
      <div class="container">
        <ul class="nav justify-content-right" style="float: right">
        <li class="nav-item" style="margin-right: 10px">Feedback</li>

        <li class="nav-item" style="margin-right: 10px"><a href="{{asset('/login')}}" style="text-decoration: none; color: black">Sign in</a></li>

        <li class="nav-item" style="margin-right: 10px">Settings</li>    
        </ul>
    </div>
    </div>
  </nav>