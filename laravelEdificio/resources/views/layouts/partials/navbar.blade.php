<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{url('/')}}">Edificios</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      {{--@if(Auth::check() )--}}
      
      <li class="nav-item">
        <a href="{{route('edificios.index')}}" class="nav-link {{ request()->routeIs('edificios.*') && !request()->routeIs('edificios.create')? ' active' : ''}}">Listado de edificios</a>
      </li>
      <li class="nav-item">
        <a href="{{route('edificios.create')}}" class="nav-link {{ request()->routeIs('edificios.create')? ' active' : ''}}">Nuevo edificio</a>
      </li>
    </ul>
    {{--@endif --}}
  </div>
</div>
</nav>