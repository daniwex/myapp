<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script><script src="[ckeditor-build-path]/ckeditor.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="{{asset('/publish/myposts')}}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">My posts</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="{{asset('/publish')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Create New Post</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('publish/updateposts')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Update Posts</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-4">
                <h1> Create Post </h1>
                @include('inc.messages')
                {!! Form::open(['url' => 'publish/myposts','method'=>'POST','files'=>'true'])!!}
                  {{Form::label('author')}}<br>
                  {{Form::text('author',Auth::user()->name,['id'=>'t-aut','readonly'=>'true'])}}<br>
                  <div class ="form-group">
                    {{Form::label('title')}}<br>
                    {{Form::text('title','',['name'=>'title'])}}
                  </div>
                  <div class ="form-group">
                    {{Form::label('body')}}<br>
                    {{Form::textarea('tarea','',['id'=>'editor', 'class'=>'tarea'])}}
                  </div><br>
                  {{form::file('image',['accept'=>'image/*'])}}<br><br>
                  {{form::submit('Submit',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
<style>
.tarea{
    resize: none;
}
.form-group{
    width: 550px;
}
h1{
    font-size: 35px;
    text-align: center;
    padding-bottom: 30px;
}
</style>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

</script>