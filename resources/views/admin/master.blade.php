<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="routeName" content="Route::currentRouteName()">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ url ('/static/css/admin.css?v='.time()) }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/5acacd9893.js" crossorigin="anonymous"></script>



    <title>@yield('title') | Back Office</title>
</head>
<body>
<div class="row g-0">
    <div class="col-3">
    @include('admin.sidebar');
    </div>
    <div class="col-9">
        <nav class="navbar navbar-expand-lg shadow">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{url('/admin')}}" class="nav-link text-light">
                    <i class="fa fa-home me-1"></i>Dashboard</a>
                </li>
            </ul>
        </nav>
        <div class="page">
            <div class="container-fluid">
             <nav class="breadcrumb shadow ">
                <ol class="bredcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}" class="text-dark"> <i class="fa fa-home me-1 "></i>Dashboard</a>
                    </li>
                    @section('breadcrumb')
                    @show
                </ol>
             </nav>
            </div>
            @if(Session::has('message'))
    <div class="container mt-3">
        <div class="alert alert-{{ Session::get('typealert') }}" style="display:none">
            {{ Session::get('message') }}
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
            </ul>
            @endif
            <script>
                $('.alert').slideDown();
                setTimeout(function(){ $('.alert').slideUp(); }, 10000);
            </script>

        </div>
    </div>
@endif

    @section('content')
    @show
        </div>

    </div>
</div>
</body>
<script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
 </script>
  <script>
    ClassicEditor
  .create( document.querySelector( '#editor' ) )
  .catch( error => {
      console.error( error );
  } );
</script>
</html>
