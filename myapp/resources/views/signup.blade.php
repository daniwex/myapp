<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
  body{padding:0px;}
  .link-class{
  padding: 10px;
  box-shadow:10px 10px 10px grey;
  padding-bottom: 20px;
  margin-bottom: 60px;
  
} 
fieldset{width:30%;font-family: 'Raleway', sans-serif; margin: auto; }
form{width: 100%; padding-top: 20px; padding-right:20px}
/* body{margin: 0px; padding: 0px;} */
input[type='text'], input[type='password'], input[type='email']{
    width:100%;
    border-top: 3px solid gray;
    /* border-right: 5px; */
    padding: 12px;
    height: 40px;    
}
fieldset{
    box-shadow:10px 10px 10px grey;
}
button{
    width: 100%;
    background-color: rgb(8, 63, 184);
    border-bottom: 1px solid blue;
    color: white;
    margin-top: 5px;
    height: 70px;
    border-radius: 25px; 
} 
button:hover{opacity: 0.8;}
a{
        margin-left: 53px;
}
.link-class{
      padding: 10px;
      box-shadow:10px 10px 10px grey;
      padding-bottom: 7px;
      margin-bottom: 40px;
    } 
  </style>


<div class="red-top" style="background-color: rgb(175, 36, 36); padding:5px;" ></div>
        <nav class="navbar navbar-expand navbar-light link-class">
            <div class="container-fluid">
              <a class="navbar-brand " href="{{asset('home')}}"><img src=" {{asset('pictures/nn-logo-inline.svg')}}" alt="a picture" style="width: 200px; height: 50px"></a>
            </div>
        </nav>
    @csrf

    <fieldset> 
      <h2><label id="sign-in">Sign up</label></h2>
      <form action="/signup" method="POST">  
        @csrf
          <label for="username"> Username<br> </label>
              <input type="text" name="username" required> <br><br>
          <label for="password"> Password <br> </label>
              <input type="password" name="password" required> <br><br>
          <label for="password2"> Re-enter your password <br> </label>
              <input type="password" name="password2" required> <br><br>
          <label for="E-mail"> E-mail<br> </label>
              <input type="email" name="email" required> <br><br>
          <button type="submit"> Sign up for free </button>
       </form>
  </fieldset>

  @include('layouts.footer')
  
  
