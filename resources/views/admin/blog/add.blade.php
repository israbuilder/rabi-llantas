@extends('admin.master')
@section('title', 'Agregar Blog')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/blog')}}"><i class="fa-regular fa-circle fw-bold me-1"></i>Blog</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('/admin/blog/add')}}"><i class="fa-regular fa-plus fw-bold me-1"></i>Agregar Blog</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-regular fa-plus fw-bold me-1"></i>Agregar Blog</h2>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/admin/blog/add']) !!}

            <div class="row">
                <div class="col-md-4">
                    <label for="name">Título:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Título']) !!}
                    </div>

                </div>

                <div class="col-md-4">
                    <label for="category">Categoria:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                        {!! Form::select('category',$cats, 0, ['class' => 'form-select']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="category">Imagen Destacada:</label>
                    <div class="input-group">
                        {!! Form::file('img',['class' => 'form-control', 'id' => 'inputGroupFile'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="content">Contenido</label>
                    {!! Form::textarea('content',null,['class' => 'form-control', 'placeholder' => 'Contenido']) !!}
                    </div>


                <div class="col-md-6">
                    <label for="content">Descripción</label>

                        {!! Form::textarea('ancho',null,['class' => 'form-control', 'id' => 'editor']) !!}
                    </div>
            </div>






            <DIV class="row mt-3">
                <div class="input-group mb-3">
                    {!! Form::submit('Guardar',['class' => 'btn btn-success'])!!}
                </div>
            </DIV>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

