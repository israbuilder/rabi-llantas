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
                    <h2 class="title"><i class="fa-solid fa-plus me-1"></i>Agregar Categorias</h2>
                </div>
                <div class="inside">
                   {!! Form::open(['url' => '/admin/category/add']) !!}
                   <label for="content">Nombre</label>
                   <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                       {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                   </div>
                   <label for="module">Modulo</label>
                   <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                       {!! Form::select('module', getModulesArray(), 0, ['class' => 'form-select']) !!}
                   </div>
                   <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-keyboard"></i></i></span>
                    {!! Form::text('icono', null, ['class' => 'form-control', 'placeholder' => 'Icono']) !!}
                </div>
                <div class="input-group mb-3">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>

                </div>
            </div>

        </div>


        <div class="col-md-8">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fa-regular fa-folder-open me-1"></i>Categorias</h2>
                </div>
                <div class="inside">
                    <nav class="nav">
                        @foreach(getModulesArray() as $m => $k)
                        <a href="{{url('/admin/categories/'.$m)}}" class="btn btn-primary me-2"><i class="fas fa-list me-2"></i>{{$k}}</a>

                        @endforeach
                    </nav>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <td width="32"></td>
                                <td>Nombre</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cats as $cat)
                            <tr>
                                <td>{!! htmlspecialchars_decode($cat->icono)  !!}</td>
                                <td>{{ $cat->name  }}</td>
                                <td> <div class="opts text-end">
                                    <a href="{{url('/admin/category/'.$cat->id.'/edit') }}"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Editar"><i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{url('/admin/category/'.$cat->id.'/delete') }}"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Borrar"><i class="fas fa-trash-alt"></i>
                                    </a>
                                </div></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection

