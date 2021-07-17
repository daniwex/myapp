@extends('layouts.index')

@push('styles')
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
@endpush

@section('contents')

<section class="section-9" style="margin-left:30px;margin-top:200px;margin-bottom:100px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact us.</h1><br>
                email@example.com <br>
                 <p>(555) 555-5555</p> <br> 
                123 Demo Street <br>
                New York, NY 12345<br><br>
                
            </div>
            <div class="col-md-6">
                <fieldset class="fieldset">
                    <Label for="name" style="font-weight: 400">Name<sup style="font-size:18px;color:red">*</sup></Label><br>
                        <div class="input-text">
                            <input type="text" name="Name" id="first">
                            <input type="text" name="Name">
                        </div>
                        <div class="under-text">
                            <span class="first-text" style="font-weight: 400">FirstName</span>
                            <span class="second-text" style="font-weight: 400">LastName</span>
                        </div><br>
                        <div class="input-m">
                        <Label for="E-mail" style="font-weight: 400">Email<sup style="font-size:18px;color:red">*</sup></Label><br>
                            <input type="email" name="E-mail">
                        </div><br><br>
                        <Label for="Message" style="font-weight: 400">Message<sup style="font-size:18px;color:red">*</sup></Label><br>
                            <textarea name="Message" cols="30" rows="10" class="textarea"></textarea><br><br>
                            <button class="submit-btn">Submit</button>
                </fieldset>
            </div>
    </div>
</section>
@endsection