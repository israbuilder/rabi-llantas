@extends('layouts.app')
@section('title', 'Inicio')
@section('header')
<header>


        <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
          <div class="col-10 col-sm-8 col-lg-6 mb-5" style="margin-top: 0px; margin:auto">
            <img src="{{ url('static/images/llantas.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="432" height="467" loading="lazy">
          </div>
          <div class="col-lg-6" style="margin-top: 0px;">
            <h1 class="display-5 fw-bold lh-1 mb-3">Llantas en Monterrey</h1>
            <p class="lead">Rabi Llantas en Monterrey, tiene para usted las mejores llantas y servicio mecánico express al mejor precio.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" onclick="window.location.href='tel:8117775715'" class="btn btn-primary btn-lg px-4 me-md-2">Llamar</button>
              <button type="button" onclick="window.location.href='https://wa.me/5218117775715'" class="btn btn-success btn-lg px-4">WhatsApp</button>

            </div>

          @include("layouts.partials.search")

                  </div>
                </div>
              </div>

              </header>
@endsection

@section('content')
<livewire:llantas-categories />
<livewire:llantas-banner />

<livewire:llantas-mas-vendidas />

<div class="b-example-divider"></div>

<livewire:llantas-info />

<livewire:llantas-video />
@endsection

