@extends('admin.master')
@section('title', 'Agregar Llantas')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/llantas')}}"><i class="fa-regular fa-circle fw-bold me-1"></i>Llantas</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('/admin/llantas/add')}}"><i class="fa-regular fa-plus fw-bold me-1"></i>Agregar Llantas</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-regular fa-plus fw-bold me-1"></i>Agregar Llantas</h2>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/admin/llantas/add', 'files' => true]) !!}

            <div class="row">
                <div class="col-md-6">
                    <label for="name">Modelo y Marca:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::text('modelo',null,['class' => 'form-control', 'placeholder' => 'Modelo y Marca']) !!}
                    </div>

                </div>

                <div class="col-md-6">
                    <label for="category">Categoría:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::select('category', $cats, 0, ['class' => 'form-select']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="category">Precio:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::text('precio',null,['class' => 'form-control', 'placeholder' => 'Precio']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="category">Imagen Destacada:</label>
                    <div class="input-group">
                        {!! Form::file('img',['class' => 'form-control', 'id' => 'inputGroupFile', 'accept' => 'image/*'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="content">Alto</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::text('alto',null,['class' => 'form-control', 'placeholder' => 'Alto']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="content">Ancho</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::text('ancho',null,['class' => 'form-control', 'placeholder' => 'Ancho']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="content">Rin</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::text('rin',null,['class' => 'form-control', 'placeholder' => 'Rin']) !!}
                    </div>
                </div>
            </div>
            <DIV class="row">
                <div class="input-group mb-3">
                    {!! Form::submit('Guardar',['class' => 'btn btn-success'])!!}
                </div>
            </DIV>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

