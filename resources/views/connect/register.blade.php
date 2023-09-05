@extends("connect.master")
@section('title', 'Registrarse')
@section('content')
<div class="box box_login shadow">
<div class="header">
    <a href="{{url('/')}}"><img class="img-fluid p-3" width="300" src="{{url('/static/images/logo-llantas-monterrey.svg')}}"></a>
</div>
<div class="inside">
{!! Form::open(['url' => '/register']) !!}
<label for="nombre">Nombre</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
    {!!  Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre']) !!}
</div>
<label for="apeido">Apeido</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-tag"></i></span>
    {!!  Form::text('lastname', null, ['class' => 'form-control', 'required', 'placeholder' => 'Apeido']) !!}
</div>
<label for="Tel">Teléfono</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
    {!!  Form::tel('phone', null, ['class' => 'form-control', 'required', 'placeholder' => 'Tel']) !!}
</div>
<label for="email">Correo Electrónico</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope-open-text"></i></span>
    {!!  Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Correo']) !!}
</div>
<label for="password" class="mt-1">Password</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
    {!!  Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'Password']) !!}
</div>
<label for="cpassword" class="mt-1">Confirmar Password</label>
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
    {!!  Form::password('cpassword', ['class' => 'form-control', 'required', 'placeholder' => 'Confirmar Password']) !!}
</div>
    {!!  Form::submit('Registrar', ['class' => 'btn btn-success',  'placeholder' => 'Password']) !!}

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
     <a href="{{url('/login')}}">Ya tengp cuenta, Ingresar!</a>

</div>
</div>
</div>
@stop



