<aside class="side-nav">
  <div class="logo-wrapper">
      <img style="width:140px" src="/img/logo-blancos.png">
      <br>
      <div class="logo-subtitle">Administrador</div>
    <div class="mobile-nav pull-right">
      <i class="fa fa-bars"></i>
    </div>
  </div>
  <div class="user-side-profile">
    <div class="user-image">
      <div class="user-on"></div>
      <img src="/img/appeal.jpg">
    </div>
    <div class="clear">
      <div class="user-name">
        {{ Auth::user()->name }}
      </div>
      <div class="user-group">Administrador</div>
    </div>
  </div>
  <div class="main-menu-title">Menú</div>
  <div class="main-menu">
    <ul>
      <li>
        <a href="/admin">
          <i class="fa fa-bars"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="">
          <i class="fa fa-window-restore"></i>
          <span>Proyectos</span>
        </a>
        <ul>
          <li><a href="/createalbum">Añadir nuevo</a></li>
      </ul>
      </li>
      <li>
        <a href="/galeries">
          <i class="fa fa-file-image-o"></i>
          <span>Galerías</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="main-menu">
    <ul>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fa fa-window-close"></i>
          <span>Cerrar sesión</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </div>
</aside>
