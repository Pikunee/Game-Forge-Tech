<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gameForgeTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

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
    
    <div class="container my-5">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">DAFTAR ADMIN</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include("koneksi.php");
              $no = 1;
              $query = mysqli_query($connection, "SELECT * FROM data_admin");
              while ($row = mysqli_fetch_array($query)) {
              ?>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
                <td>
                  <a href="update_dataadmin.php?id=<?php echo $row['id']?>" class='btn btn-warning'>Update</a>
                  <a href="hapus_dataadmin.php?id=<?php echo $row['id']?>" class='btn btn-danger'>Delete</a>
                </td>
              </tr>
              <?php 
              }
              mysqli_close($connection);
              ?>
            </tbody>
          </table>
          <a href="tambah_dataadmin.php" class="btn btn-success">Tambah Data</a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
