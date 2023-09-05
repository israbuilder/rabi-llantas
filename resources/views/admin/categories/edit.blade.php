@extends('admin.master')
@section('title', 'Categorias')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/categories')}}"><i class="fa-regular fa-folder-open me-1"></i>Categorias</a>
</li>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-4">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fa-solid fa-edit me-1"></i>Editar Categorias</h2>
                </div>
                <div class="inside">
                   {!! Form::open(['url' => '/admin/category/'.$cat->id.'/edit']) !!}
                   <label for="content">Nombre</label>
                   <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                       {!! Form::text('name',$cat->name,['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                   </div>
                   <label for="module">Modulo</label>
                   <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                       {!! Form::select('module', getModulesArray(), $cat->module, ['class' => 'form-select']) !!}
                   </div>
                   <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                    {!! Form::text('icono', $cat->icono, ['class' => 'form-control', 'placeholder' => 'Icono']) !!}
                </div>
                <div class="input-group mb-3">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>

                </div>
            </div>

        </div>

    </div>

</div>
@endsection

