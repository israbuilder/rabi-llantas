@extends('admin.master')
@section('title', 'Usuarios')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/users')}}"><i class="fas fa-users me-1"></i>Usuarios</a>
</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-users me-1"></i>Usuarios</h2>
        </div>
        <div class="inside">
            <table class="table">
                <thead>
                    <tr class="fw-bolder">
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apeido</td>
                        <td>Correo</td>
                        <td>Teléfono</td>
                        <td>Acciones</td>
                    </tr>
                   <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <div class="opts">
                                <a href="{{url('/admin/user/'.$user->id.'/edit') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip"
                                    data-bs-title="Editar"><i class="fas fa-edit"></i>
                                </a>
                                <a href="{{url('/admin/user/'.$user->id.'/delete') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip"
                                    data-bs-title="Borrar"><i class="fas fa-trash-alt"></i>
                                </a>
                            </div>

                        </td>


                    </tr>




                    @endforeach
                   </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
