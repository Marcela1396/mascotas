<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->

  <a class="navbar-brand" href="{{ url('/') }}">Inicio </a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/nosotros') }}">Nuestra Tienda </a>
        </li>

      <!-- Dropdown -->

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/mascotas') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mascotas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/mascotas/perros') }}">Perros</a>
                <a class="dropdown-item" href="{{ url('/mascotas/gatos') }}">Gatos</a>
            </div>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/contactos') }}">Contactos</a>
        </li>

    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

