<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="#!"><i class="fas fa-blog" style="font-size: 25px"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link @if(url()->current() == url('/')) active @endif" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link @if(url()->current() == url('/about')) active @endif " href="{{asset('/about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link @if(url()->current() == url('/login')) active @endif " href="{{asset('/login')}}">Login</a></li>
             
            </ul>
        </div>
    </div>
</nav>