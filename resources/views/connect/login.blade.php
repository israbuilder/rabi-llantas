@extends("connect.master")
@section('title', 'Login')
@section('content')
<div class="box box_login shadow">
<div class="header">
    <a href="{{url('/')}}"><img class="img-fluid p-3" width="300" src="{{url('/static/images/logo-llantas-monterrey.svg')}}"></a>
</div>
<div class="inside">
{!! Form::open(['url' => '/login']) !!}
<label for="email">Correo Electrónico</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope-open-text"></i></span>
    {!!  Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo']) !!}
</div>
<label for="email" class="mt-1">Password</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
    {!!  Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
</div>
    {!!  Form::submit('Ingresar', ['class' => 'btn btn-success', 'placeholder' => 'Password']) !!}

{!! Form::close() !!}
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
<div class="footer">
     <a href="{{url('/register')}}">No tiene una cuenta?, Registrate</a>
    <a href="{{url('/recover')}}" class="ms-3 text-dark"> Recuperar contraseña</a>

</div>
</div>
</div>
@stop



