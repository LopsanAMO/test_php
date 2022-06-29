<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('welcome') }}" class="simple-text logo-normal">
      <img src="{{ asset('storage/Images/logo.png') }}" alt="" width="60px">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'banners' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('banners.index') }}">
            <i class="material-icons">chrome_reader_mode</i>
            <p>{{ __('Banners') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'about' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('about.show', 1) }}">
          <i class="material-icons">book</i>
            <p>{{ __('Acerca de') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'asesoria' || $activePage == 'teso_inv') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">fact_check</i>
          <p>{{ __('Servicios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'teso_inv' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('servicios.index') }}">
                <span class="sidebar-mini"> T&I </span>
                <span class="sidebar-normal"> {{ __('Tesorería, Inversión') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'asesoria' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('asesoria.index') }}">
                <span class="sidebar-mini"> A </span>
                <span class="sidebar-normal">{{ __('Asesoria') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('clientes.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Clientes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'contacto' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('contacto.show', 1) }}">
          <i class="material-icons">near_me</i>
          <p>{{ __('Contacto') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
