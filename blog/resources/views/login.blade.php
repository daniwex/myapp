@extends('layouts.index')

@section('contents')

<div class="content">
    <div class="container">
      <div class="row justify-content-center">
            <!-- <div class="col-md-6 order-md-2">
             <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
         </div> -->
            <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Sign In to <strong>Awesome blog</strong></h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                </div>
                <form action="/login" method="GET">
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="username">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                  <span class="d-block text-center my-4 text-muted"> or sign in with</span>
                  
                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  @endsection
<style>
.container{
        margin-top:20px;
        
    }
.justify-content-center {
    padding-top: 50px;
    width: 500px;
    -webkit-box-pack: center!important;
    -ms-flex-pack: center!important;
    justify-content: center!important;
    background-color:rgb(182, 179, 179);
}
/* .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    /* margin-right: -15px;
    margin-left: -15px; */
} */
/* *, :after, :before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
} */
div {
    display: block;
}
</style>