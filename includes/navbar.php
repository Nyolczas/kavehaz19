
<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark navbar-fixed-top navbar-center">
    <div class="container">
      <a class="navbar-brand" href="menu.php">
        <img alt="Utasellátó logó" src="img/ue-logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item <?php if($page == 'index') {echo 'active';} ?> ">
            <a class="nav-link" href="index.php"> főoldal
            </a>
          </li>
          <li class="nav-item <?php if($page == 'rolunk') {echo 'active';} ?> ">
            <a class="nav-link" href="rolunk.php">rólunk</a>
          </li>
          <li class="nav-item <?php if($page == 'menu') {echo 'active';} ?>">
            <a class="nav-link" href="menu.php">menü</a>
          </li>
          <li class="nav-item <?php if($page == 'galeria') {echo 'active';} ?>">
            <a class="nav-link" href="galeria.php">galéria</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right ">
          <li class="nav-item <?php if($page == 'rendezvenyek') {echo 'active';} ?>">
            <a class="nav-link" href="rendezvenyek.php">rendezvényszervezés
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?php if($page == 'kapcsolat') {echo 'active';} ?>">
            <a class="nav-link" href="kapcsolat.php">kapcsolat</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->