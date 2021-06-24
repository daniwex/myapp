<x-app-layout>
    @extends('layouts.dashindex')
@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@section('content') 
<div class="img-con">
    <img src="{{asset('pictures/styledbymide copy.png')}}" alt="pic logo" style ="width:25%"class="pt-1 pb-1 me-auto">
  </div>
<div class="topnav">   
    <a href="{{route('home')}}"><i class="fas fa-home"></i></a>
    <div class="search-container">
      <form action="/action_page.php">
        <span class="label label-default">trousers</span>
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ml-6">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Trousers</li>
    </ol>
  </nav>
  <div class="container">
      <div class="row row-1">
          <div class="col-md-3 img-con-1">
             <img src="pictures/trouser1.png" alt="a pic" style="height:400px"
             div class="img-con-1-descrip">
               <button>order now</button>  
             </div>>
          </div>
          <div class="col-md-3 img-con-1">
            <img src="pictures/man-pic.png" alt="a pic" style="height:320px ">         </div>
         <div class="col-md-3 img-con-1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
      </div>
      <div class="row row-1">
        <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
         <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
         <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
    </div>
    <div class="row row-1">
        <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
         <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
         <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
    </div>
    <div class="row row-1">
        <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
         <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
         <div class="col-md-3 img-con-1 rx1">
            <img src="pictures/trouser1.png" alt="a pic" style="height:400px ">         </div>
    </div>
  </div>
@endsection
</x-app-layout>