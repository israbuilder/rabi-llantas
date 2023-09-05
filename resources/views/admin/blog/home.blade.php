@extends('admin.master')
@section('title', 'Blog')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/blog')}}"><i class="fa-regular fa-circle fw-bold me-1"></i>Blog</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-regular fa-circle fw-bold me-1"></i>Blog</h2>
        </div>
        <div class="inside">
            <div class="btns">
                <a href="{{url('/admin/blog/add')}}" class="btn btn-primary"><i class="fas faplus me-1"></i>Agregar Blog</a>
            </div>
            <table class="table">

            </table>
        </div>
    </div>
</div>
@endsection

