<!--Barra de navegación-->

<nav class="navbar navbar-expand-lg bg-body-#b366af">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">  
        <!--logo de la empresa-->
      <img src="<?php echo base_url('assets/img/logonav.png')?>" alt="marca" width="70" height="60" class="img-fluid"/>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrar">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Animacion General</a></li>
            <li><a class="dropdown-item" href="#">Spa Party</a></li>
            <li><a class="dropdown-item" href="#">Alquiler Inflables</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


