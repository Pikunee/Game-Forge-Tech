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

    <title>gameForgeTech</title>

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
                <img
                  src="assets/images/logo_forgatach-removebg-preview.png"
                  alt=""
                />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="dashboard.php" class="active">Home</a></li>
                <li><a href="game.php">Games</a></li>
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
            <!-- ***** Banner Start ***** -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h6>Selamat Datang Di gameForgeTech</h6>
                    <h4><em>Browse</em> Our Popular Games Here</h4>
                    <div class="main-button">
                      <a href="game.php">Cari Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Banner End ***** -->

            <!-- ***** Most Popular Start ***** -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4><em>Game Terpopuler</em> Sekarang</h4>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-sm-6">
                      <div class="item">
                      <a href="genshin_impact.php"><img src="assets/images/genshin_impact_lg.jpeg" alt=""></a>
                        <a href="genshin_impact.php"><h4>Genshin Impact<br /><span>RPG</span></h4></a>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="item">
                      <a href="pubg_mobile.php"><img src="assets/images/pubg_mobile_lg.jpg" alt="" /></a>
                      <a href="pubg_mobile.php"><h4>PUBG Mobile<br /><span>Battle Royale</span></h4></a>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="item">
                      <a href="dota_2.php"><img src="assets/images/dota_2_lg.jpg" alt="" /></a>
                      <a href="dota_2.php"><h4>Dota 2<br /><span>MOBA</span></h4></a>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="item">
                      <a href="mobile_lagend.php"><img src="assets/images/mobile_lagend_lg.jpg" alt="" /></a>
                      <a href="mobile_lagend.php"><h4>Mobile Legend<br /><span>MOBA</span></h4></a>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="item">
                        <div class="row">
                          <div class="col-lg-6 col-sm-6">
                            <div class="item inner-item">
                            <a href="honkai_star_rail.php"><img src="assets/images/honkai_star_rail_lg.jpeg" alt="" /></a>
                            <a href="honkai_star_rail.php"><h4>Honkai Star Rail<br /><span>Turn Based RPG</span></h4></a>
                              <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-6 col-sm-6">
                            <div class="item">
                            <a href="lol_wild_rift.php"><img src="assets/images/lol_wild_rift_lg.jpeg" alt="" /></a>
                            <a href="lol_wild_rift.php"><h4>Lol Wild Rift<br /><span>MOBA</span></h4></a>
                              <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="item">
                        <img src="assets/images/popular-07.jpg" alt="" />
                        <h4>Warface<br /><span>Max 3D</span></h4>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="item">
                        <img src="assets/images/popular-08.jpg" alt="" />
                        <h4>Warcraft<br /><span>Legend</span></h4>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
          </div>
        </div>
      </div>
    </div>
      <!-- ***** Featured Games End ***** -->
       
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
