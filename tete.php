<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse  d-flex " id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">utilisateur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
<?php     if ($_SERVER['SCRIPT_NAME']!=='/user.php'){
  ?>

 <div class="p-5 text-center bg-light" style="margin-top: 58px;">
    <h1 class="mb-3">Bienvenu dans Arrey Technologie</h1>
    <h4 class="mb-3">Meilleur centre des formations informatique </h4>
    <a class="btn btn-primary" href="" role="button">S'avoir plus</a>
  </div>


<?php
}
?>
 
  <!-- Jumbotron -->
</header>

<pre>

 
</pre>
