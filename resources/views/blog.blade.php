@extends('layouts.app')
@section('title', 'Nosotros')
@section('header')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs p-0">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{url('static/images/blog-llantas.jpg')}}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Blog</h2>
            <p>En Nuestro Blog de Noticias, Rabi Llantas y Mecanico le informa con artículos de especial interés para usted.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{url('/')}}">Inicio</a></li>
          <li>Blog</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

@endsection

@section('content')


<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8 entries">
          <article class="entry entry-single">
          <div class="entry-img">
              <img src="{{url('public/images/blog_image')}}" alt="" class="img-fluid">
            </div>
            <h2 class="entry-title">
              <a href="{{url('blog_cat_permalink')}}">{{'hola'}}</a>
            </h2>
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('#')}}">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('#')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{url('#')}}">12 Comments</a></li>
              </ul>
            </div>
            <div class="entry-content">
              <p style="color:#313131">
              {{'blog_content'}}</p>
            </div>
            <div class="entry-footer">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="{{url('#')}}">Business</a></li>
              </ul>
              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a href="{{url('#')}}">Creative</a></li>
                <li><a href="{{url('#')}}">Tips</a></li>
                <li><a href="{{url('#')}}">Marketing</a></li>
              </ul>
            </div>
          </article><!-- End blog entry -->
        </div><!-- End blog entries list -->

        <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Categorias</h3>
              <div class="sidebar-item categories">
                <ul>

              <li><a href="{{url('blog_cat_permalink')}}"><span>{{url('blog_cat_name')}}</span></a></li>



                </ul>
              </div><!-- End sidebar categories-->
              <h3 class="sidebar-title">Publicaicones Recientes</h3>
              <div class="sidebar-item recent-posts">

            <div class="post-item clearfix">
                <img src="{{url('blog_image')}}" alt="">
                <h4><a href="{{url('blog/blog_cat_permalink/blog_permalink')}}">{{url('blog_title')}}</a></h4>
                <time datetime="2020-01-01">{{'blog_date'}}</time>
              </div>



              </div><!-- End sidebar recent posts-->
              <h3 class="sidebar-title">Etiquetas</h3>
              <div class="sidebar-item tags">
                <ul>

                    <li><a href="{{url('#')}}">{{'listings'}}</a></li>



                </ul>
              </div><!-- End sidebar tags-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Single Section -->
    </main>
@endsection

