<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>LOL WILD RIFT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="dashboard.php" class="logo">
                <img src="assets/images/logo_forgatach-removebg-preview.png" alt="" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="game.php">Games</a></li>
                <li><a href="lol_wild_rift.php" class="active">Lol Wild Rift</a></li>
                <li>
                  <a href="profile.php"
                    >Profile <img src="assets/images/profile-header.jpg" alt=""
                  /></a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Featured Start ***** -->
            <div class="row">
              <div class="col-lg-12">
                <div class="feature-banner header-text">
                  <div class="row">
                    <div class="col-lg-4">
                      <img
                        src="assets/images/lol_wild_rift_fl.jpeg"
                        alt=""
                        style="border-radius: 23px"
                      />
                    </div>
                    <div class="col-lg-8">
                      <div class="thumb">
                        <img
                          src="assets/images/lol_wild_rift_fr.jpeg"
                          alt=""
                          style="border-radius: 23px"
                        />
                        <a
                          href="https://www.youtube.com/watch?v=TFzkbos0oeo"
                          target="_blank"
                          ><i class="fa fa-play"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Featured End ***** -->

            <!-- ***** Details Start ***** -->
            <div class="game-details">
              <div class="row">
                <div class="col-lg-12">
                  <h2>LOL WILD RIFT</h2>
                </div>
                <div class="col-lg-12">
                  <div class="content">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="left-info">
                          <div class="left">
                            <h4>LOL WILD RIFT</h4>
                            <span>MOBA</span>
                          </div>
                          <ul>
                            <li><i class="fa fa-star"></i> 4.8</li>
                            <li><i class="fa fa-download"></i> 2.3M</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="right-info">
                          <ul>
                            <li><i class="fa fa-star"></i> 4.8</li>
                            <li><i class="fa fa-download"></i> 2.3M</li>
                            <li><i class="fa fa-server"></i> 36GB</li>
                            <li><i class="fa fa-gamepad"></i> Action</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <img
                        src="assets/images/lol_wild_rift_dt1.jpeg"
                        alt=""
                          style="border-radius: 23px; margin-bottom: 30px"
                        />
                      </div>
                      <div class="col-lg-4">
                        <img
                          src="assets/images/lol_wild_rift_dt2.jpeg"
                          alt=""
                          style="border-radius: 23px; margin-bottom: 30px"
                        />
                      </div>
                      <div class="col-lg-4">
                        <img
                          src="assets/images/lol_wild_rift_dt3.jpeg"
                          alt=""
                          style="border-radius: 23px; margin-bottom: 30px"
                        />
                      </div>
                      <div class="col-lg-12">
                        <p>
                        League of Legends: Wild Rift adalah permainan video bergenre multiplayer online battle arena (MOBA) yang dikembangkan dan diterbitkan oleh Riot Games. Dirilis untuk perangkat mobile (iOS dan Android) dan konsol pada tahun 2020, Wild Rift merupakan adaptasi dari permainan populer League of Legends yang dirancang khusus untuk platform mobile dan konsol dengan kontrol dan gameplay yang disesuaikan. Dalam Wild Rift, dua tim yang masing-masing terdiri dari lima pemain bertarung di peta yang disebut "Wild Rift" untuk menghancurkan Nexus tim lawan, yang terletak di dalam basis mereka. Setiap pemain mengendalikan seorang "Champion" yang memiliki kemampuan unik dan peran tertentu dalam tim, seperti tank, marksman, mage, support, dan assassin. Pertandingan biasanya berdurasi sekitar 15-20 menit, lebih singkat dibandingkan versi PC.
                    </div>
                      <div class="col-lg-12">
                        <div class="main-border-button">
                          <a href="https://wa.me/+6288213318755? text=Halo, saya ingin memesan top up untuk game LOL Wild Rift.">TOP UP LOL WILD RIFT SEKARANG!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Details End ***** -->
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
              Copyright © 2036 <a href="dashboard.php">gameForgeTech</a> Company. All rights
              reserved.

              <br />
              <a
                href="https://templatemo.com"
                target="_blank"
                title="free CSS templates"
                ></a
              >
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
