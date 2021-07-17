@extends('layouts.index')

@push('styles')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
@endpush

@section('contents')

<main class="jumbotron">
    <div class="img-wrapper " style="width:1440px">
        <img src="{{ asset('pictures/4295312.jpg') }}" alt="a pic" style="opacity:0.86;width:1440px;height:854px">
    </div>
</main>
<div class="content-descrip text-dark">
    <h1>
        Find the therapist that best suits your needs.
    </h1><br>
</div>

@endsection