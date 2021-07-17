<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    
<main class="main-navbar">
    <nav class="navbar">
        <div class="navbar-brand">
            <h3>Clove Therapy</h3>
        </div>
        <div class="navbar-links">
            <ul>
                <li class="active unique a"><a href="javascript:void(0);">Blogs</a> <i class="fa fa-plus" id="content-3" ontoggle></i><i class="fa fa-minus" id="content-2"></i></li>
                <div id="content-1">
                    <ul>
                        <li><a href="">New Blog</a></li>
                        <li><a href="">Review Blog</a></li>
                        <li><a href="">Blog Format</a></li>
                    </ul>
                </div>
                <li class="a unique"><a href="javascript:void(0);">Analytics</a><i class="fa fa-plus"></i></li>
                <div id="content-1">
                    <ul>
                        <li><a href="">New Blog</a></li>
                        <li><a href="">Review Blog</a></li>
                        <li><a href="">Blog Format</a></li>
                    </ul>
                </div>
                <li class="unique a" ><a href="javascript:void(0);"> Create new Blog</a><i class="fa fa-plus"></i></li>
                <div id="content-1">
                    <ul>
                        <li><a href="">New Blog</a></li>
                        <li><a href="">Review Blog</a></li>
                        <li><a href="">Blog Format</a></li>
                    </ul>
                </div>
                <li class=" a"><a href="javascript:void(0);">Review Blogs</a><i class="fa fa-plus"></i></li>
                <div id="content-1">
                    <ul>
                        <li><a href="">New Blog</a></li>
                        <li><a href="">Review Blog</a></li>
                        <li><a href="">Blog Format</a></li>
                    </ul>
                </div>
            </ul>
        </div>
      
    
    </nav>
</main>
<div class="clear-float" style="clear: both">

{{-- <div class="contain"> 
    <nav class="navbar-1">
        <div class="cont-1">
            <div class="icon-bars">
                <a href=""><i class="fa fa-envelope"></i></a>
                <a href=""><i class="fa fa-comment-alt"></i></a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="">Content management</a></li>
                    <li><a href="">Subscribers</a></li>
                    <li><a href=""></a></li>
                    <li><a href="">x</a></li>
                </ul>
            </div>
        </div>
    </nav>
 </div> 

 <div class="image">
     <img src="{{ asset('pictures/image-asset 2.jpeg') }}" alt="">
 </div> --}}

 <div class="container-fluid">
     <div class="row">
         <div class="col">
            {{-- <div class="contain"> 
                <nav class="navbar-1">
                  <div class="cont-1">
                        <div class="icon-bars">
                            <a href=""><i class="fa fa-envelope"></i></a>
                            <a href=""><i class="fa fa-comment-alt"></i></a>
                        </div>
                        <div class="links">
                            <ul>
                                <li><a href="">Content management</a></li>
                                <li><a href="">Subscribers</a></li>
                                <li style="float: right"><a href=""><i class="fa fa-user"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </nav>
             </div> 
         </div> --}}
     </div>

 </div>

</body>
</html>

<style>
    body{
        display:flex;
        margin:0px;
        padding:0px;
        /* background: rgba(208, 233, 236, 0.4) */
        background: rgba(3, 3, 3, 0.507);
        font-family: 'Noto Sans KR', sans-serif;
        font-weight: 400
    }
    a{
        text-decoration: none;
        color:black;
    }
    ul{list-style: none;}
    .container-fluid{width:1190px}
    .main-navbar{
        /* padding:10px 10px 30px 10px; */
        width:250px;
        display: flex;
        flex-direction: column;
        background: white;
        height: 100%;
    }
    .navbar-brand{
        border-bottom: 1px solid rgb(223, 206, 206);
       padding-bottom: 0px; 
       margin-right:0px;
       padding-right:0px;
       width:100%;
    }
    .navbar-brand h3{
        padding-left:10px;
    }
    .navbar-links{
        margin:20px 10px;
        width:100%   
    }
    .navbar ul{padding:0;margin:0;float: left; width:100%;}
    .navbar li {width:100%;padding:15px;margin-top:10px}
    /* .navbar  a{
        /* margin:5px; 
        background: red;
        width:250px;
    } */
    .active{
        background-color: rgba(183, 217, 240, 0.336);
       
    }
    .active a, .active i{
        color:rgba(7, 127, 207, 0.336)
    }
    .navbar a:hover,.navbar li:hover a{color:rgba(7, 127, 207, 0.336)}
    .navbar li:hover{
        background-color: rgba(183, 217, 240, 0.336);
        color:rgba(7, 127, 207, 0.336)
    }
    .navbar li,.navbar li i:hover{
        cursor: pointer;
    }
    li i{
        float:right;
        /* padding:10px 0px;
        padding-right:10px */
    }
    .fa-plus,.fa-minus{font-size: 10px;padding-top:7px}
    .contain{background:white;margin:auto;width:1080px}
    .navbar-1{
        display: flex;
        flex-direction: row;
        color:white;
        padding:5px 10px 5px 10px;
       
    }
    .navbar-1 ul li{
        display: inline;
        margin-right:20px
    }
    /* .cont-1{margin-top:auto} */
    #content-1,#content-2{display:none;}
    #content-1 ul{
        background-color: rgba(142, 145, 148, 0.164);
        margin-bottom:15px
    }
    
</style>

<script>
     var getClass = document.getElementsByClassName('unique');
     var getid = document.getElementById('content-1');
     var getid_1 = document.getElementById('content-3');
     var i;
     var getid_2 =  document.getElementById('content-2');
    //  for (i = 0;i< getClass.length;i++) {
    //  getClass[i].addEventListener('click',function (){
    //    getClass[0].className = getClass[0].className.replace("unique","")
    //     this.classNanme += "unique";
    //     var dropdownContent = this.nextElementSibling;

    //     if(dropdownContent.style.display =="none"){
    //      getid_2.style.display="inline";
    //      getid_1.style.display="none"
    //      dropdownContent.style.display = "block";
         
    //     }
    //     else{
    //      getid_2.style.display="none";
    //      getid_1.style.display="block";
    //      dropdownContent.style.display = "none";
    //     }
    //  })
    //  }
     var it = document.getElementsByClassName('a')
     for(i=0;i<it.length;i++){
         it[i].addEventListener('click',function (){
            var current1 = document.getElementsByClassName('active');
            current1[0].className = current1[0].className.replace('active','')
            this.className += "active"
         })
     }
</script>