<style>
#t-u{
    position: absolute;
    top: 55px;
    left: 50px;
   } 
.logo{
  padding: 40px;
  background-color: black;
  color: white;
  font-family: 'Dancing Script', cursive;
  font-size: 30px;
}
.l-cl:hover{
  cursor: pointer;
}
.fa-shopping-cart, .fa-user-circle{
  padding: 10px;
  font-size: 20px
}
/* .dropdown-content {
  display: none;
  position: absolute;
  left:85%;
  padding: 10px;
  margin-top:30px;
  background-color: #f1f1f1;
  min-width: 100px;
  height: 100px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 0;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.show{display: block;} */
.nav-link{
  color: white;
}
</style>
<div class="header-logo logo" style="width:100%" onclick="goHome()"> 
    <div class="l-cl"><h4>S</h4><span id="t-u">tyled by mide </span></div>
    {{-- {{-- <i class="fas fa-shopping-cart  dropbtn" style="float: right;" onclick="changePage()"></i>
    <i class="fas fa-user-circle dropdown" style="float: right;" onclick="showOpt()"></i>
    <div class="dropdown-content" id="myDropdown">
        <a class="drop-down-item" href="#home">Home</a>
        <a class="drop-down-item" href="#about">About</a>
        <a class="drop-down-item" href="#contact">Contact</a>
</div> --}}
</div> 
{{--     
    <nav class="navbar navbar-expand-sm  sticky-top" style="background-color:black; width: 100% ">
     <ul class="navbar-nav" style="margin:auto">
       <li class="nav-item">
         <a class="nav-link active" href="{{asset('/')}}" style="color: white" >Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#"  style="color: white">Designs</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#"  style="color: white">Designs</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#"  style="color: white">Designs</a>
       </li>
      </ul>
    </nav> --}}
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: black">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
  
        <!-- Notifications -->
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
  
        <!-- Avatar -->
       
        
       <i class="fas fa-user-circle dropdown-toggle d-flex align-items-center hidden-arrow "id="navbarDropdownMenuLink"> </i>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink" >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
<script>
    function changePage(){
        location.href = "/shop"
    }
    function showOpt(){
        document.getElementById("myDropdown").classList.toggle("show");
    }
    function goHome(){
      location.href="/"
    }
</script>