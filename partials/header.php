<?php
  require_once('_inc/functions.php');
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Gorila Zámočníctvo</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php
        // Check if the current page is the specific page where you want to remove the image
        // You can replace "specific-page.php" with the actual filename of the specific page
        if(basename($_SERVER['PHP_SELF']) !== 'specific-page.php') {
        ?>
        <div class="hero_bg_box">
            <div class="img-box">
                <img src="images/hero-bg.jpg" alt="">
            </div>
        </div>
        <?php } ?>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Báčsky Petrovec, 21470, Srbsko
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                bravarija.gorila@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                Gorila Zámočníctvo
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Domov <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> O nás</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Služby </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="guard.php"> Galéria </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> Kontakt </a>
                </li>
                <?php
                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){

                
                echo '
                <li class="nav-item">
                  <a class="nav-link" href="login.php"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php"> Register </a>
                </li>';
                } if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                 echo '
                <li class="nav-item">
                  <a class="nav-link" href="admin.php"> Admin </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout </a>
                </li>';
                }
                ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
<!-- </body> -->