@extends('admin.master')
@section('title', 'Llantas')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/llantas')}}"><i class="fa-regular fa-circle fw-bold me-1"></i>Llantas</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-regular fa-circle fw-bold me-1"></i>Llantas</h2>
        </div>
        <div class="inside">
            <div class="btns">
                <a href="{{url('/admin/llantas/add')}}" class="btn btn-primary"><i class="fas faplus me-1"></i>Agregar Llanta</a>
            </div>
            <table class="table">

            </table>
        </div>
    </div>
</div>
@endsection

