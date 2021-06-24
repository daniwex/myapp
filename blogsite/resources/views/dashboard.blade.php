<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- <div class="w3-content"> --}}
        <!-- Header -->
        <header class="head">
              <img src="{{asset('images/pexels-tirachard-kumtanom-733856.jpg')}}" class="imgcl">
              <div class="content">
              <h1 class="display-5 fw-bold"> <b>MY BLOG</b></h1>
              <p style="padding-left: 20px">Welcome to my blog</p>
              <button class="btn btn-primary btn-lg" type="button" style="padding-left: 20px">Example button</button>
              </div>
      </header>
         
             
        
    <div class="container">
        <div class="row">
          @foreach ($pos as $item)
            <div class="col-md-4" style="padding-bottom:50px;padding-right:100px">
             
                <div class="card mr-2" style="width:400px;padding:40px;">
                    <img class="card-img-top" src="{{asset('images/'.$item->images)}}" alt="Card image" style="width:inherit;height:265px">
                    <div class="card-body">
                        <h4 class="card-title">{{$item->author}}</h4>
                        {{-- <p class="card-text">{!!$item->body!!}</p> --}}
                        <div class="card-footer">
                            <p><span class="w3-padding-large w3-left float-right pl-4" style="margin-right:20px"></a><b>Comments</b> <span
                                        class="badge bg-dark">0</span></span>
                            <button class="w3-button w3-padding-large w3-white w3-border" style="margin-left:0px"><b>READ
                                        MORE »</b></button></p>
                        </div>

                    </div>
                </div>
               
            </div>
            @endforeach
            {{$pos->links()}}
        </div>
        <br>

@include('layouts.footer')
</x-app-layout>
</body>
</html>

<style>
.image{
  background-color: red;
  margin-right:0px
}
.img-op{
  margin:0px;
  padding: 50px;
  opacity: 0.7;
}
.p-5{
   position: absolute;
   top: 10vh;
 }
.head>.imgcl{
  padding-left:0px; !important
  margin-left:0px;
  padding-bottom: 40px;
  height:70vh;
  width:100%;
  opacity:0.5
}
.content{
  position: absolute;
  top:40vh;
  left:600px;
}
 
</style>
<script>
    $(document).ready(function () {
        document.onload(function () {
            $(.
                'toast').toast('show');
        });
    });

</script>
