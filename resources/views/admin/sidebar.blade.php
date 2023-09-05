<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{url ('static/images/logo-llantas-monterrey.svg')}}" class="img-fluid">
        </div>

        <div class="user">
            <span class="subtitle">Bienvenido:</span>
            <div class="name">
                {{Auth::user()->name }} {{Auth::user()->lastname}}
                <a href={{url('/logout')}}
                 data-bs-toggle="tooltip"
                 data-bs-placement="top"
                 data-bs-custom-class="custom-tooltip"
                 data-bs-title="Salir">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  </a>
            </div>
            <div class="email">
                {{Auth::user()->email }}
            </div>
        </div>


    </div>
    <div class="main">
        <ul>
        <li><a href="{{url('/admin')}}"><i class="fas fa-home"></i>Dashboard</a></li>
        <li><a href="{{url('/admin/llantas')}}"><i class="fa-regular fa-circle fw-bold"></i>Llantas</a></li>
        <li><a href="{{url('/admin/blog')}}"><i class="fa-solid fa-network-wired"></i>Blog</a></li>
        <li><a href="{{url('/admin/categories/0')}}"><i class="fa-regular fa-folder-open"></i>Categorias</a></li>

        <li><a href="{{url('/admin/users')}}"><i class="fa-solid fa-users"></i>Usuarios</a></li>
      </ul>
    </div>
</div>
