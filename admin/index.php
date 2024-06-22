<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_admin.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

  </head>
  <body>
    <nav class="navbar navbar-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand mb-0 h1 text-center mx-auto">Admin gameForgeTech</span>
      </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-body">
      <ul class="list-unstyled">
          <li>
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li>
            <a class="nav-link" href="manajemen_kostumer.php">Manajemen Kostumer</a>
          </li>
          <li>
            <a class="nav-link" href="data_admin.php">Daftar Admin</a>
          </li>
          <li>
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col text-center">
          <h1>Dashboard Admin gameForgeTech</h1>
          <p>Selamat datang di area admin gameForgeTech. Di sini Anda dapat mengelola kostumer, melihat laporan, dan melakukan berbagai tugas administratif lainnya.</p>
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-body">
                              <h5 class="card-title">Data Admin</h5>
                              <a href="data_admin.php" class="btn btn-primary btn-sm"> => </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-body">
                              <h5 class="card-title">Data Pembeli</h5>
                              <a href="manajemen_kostumer.php" class="btn btn-primary btn-sm"> => </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="gambar">
            <img src="thug life mai.png" alt="Gambar 1">
            <!-- <img src="gambar2.jpg" alt="Gambar 2"> -->
            <!-- Anda dapat menambahkan gambar lain di sini -->
          </div>
        </div>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
