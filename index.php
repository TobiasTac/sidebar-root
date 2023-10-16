<?php
require "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SideBar</title>

  <!-- <link rel="stylesheet" href="assets/css/root.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="stylesheet" href="assets/css/sidebar.css">
  <link rel="stylesheet" href="assets/css/modal.css">
  <link rel="stylesheet" href="assets/css/responsive.css"> -->

  <!-- css  -->
  <link rel="stylesheet" href="assets/style.min.css">

  <!-- boxicon  -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <nav>
    <div class="logo">
      <i class="bx bx-menu menu-icon"></i>
      <a href="#"> <span class="logo-name">SwiftPlanner</span> </a>
    </div>
  </nav>

  <div class="sidebar active">
    <div class="menu-btn">
      <i class="bx bx-menu menu-icon"></i>
    </div>
    <div class="head">
      <div class="user-img">
        <img src="assets/img/logo.png" alt="" />
      </div>
    </div>
    <div class="nav">
      <div class="menu">
        <p class="title"> Main </p>
        <ul>
          <li>
            <a href="#">
              <i class="bx bxs-home"></i>
              <span class="text"> Home </span>
            </a>
          </li>
        </ul>
      </div>
      <div class="menu">
        <p class="title"> Perfil </p>
        <ul>
          <li>
            <a href="#">
              <i class="bx bxs-user"></i>
              <span class="text"> Perfil </span>
              <i class='bx bx-chevron-down'></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="menu">
        <p class="title"> Funções </p>
        <ul>
          <li>
            <a href="#">
              <i class='bx bxs-timer'></i>
              <span class="text"> Modo SMART </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bxs-book-reader'></i>
              <span class="text"> Controle de Leituras </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bxs-book-heart'></i>
              <span class="text"> Diário Emocional </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bxs-calendar'></i>
              <span class="text"> Cronograma </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bxs-book-bookmark'></i>
              <span class="text"> Agenda </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bxs-calendar-check'></i>
              <span class="text"> Rotina </span>
            </a>
          </li>
          <li>
            <a href="Habitos.php">
              <i class='bx bx-list-check'></i>
              <span class="text"> Hábitos </span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-line-chart'></i>
              <span class="text"> Metas </span>
            </a>
        </ul>
      </div>

    </div>
    <div class="menu">
      <p class="title"> Mode </p>
      <ul>
        <li class="chk">
          <a>
            <i class='bx bx-moon moon'></i>
            <i class='bx bx-sun sun'></i>
            <span class="text"> Mode </span>
          </a>
        </li>
      </ul>
      <br>
      <p class="title"> Exit </p>
      <ul>
        <li>
          <a class="logout" href="#">
            <i class='bx bx-log-out'></i>
            <span class="text"> Logout </span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="sidebarclose">
    <div class="logo">
      <img src="assets/img/logo.png" alt="">
      <span class="logo-name"> Swift Planner </span>
      <i id="close" class="bx bx-x menu-icon"></i>
    </div>
    <div class="sidebar-content">
      <ul class="lists">
        <li class="list">
          <a href="#" class="nav-link">
            <i class="bx bx-home-alt icon"></i>
            <span class="link">Home</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class="bx bx-user icon"></i>
            <span class="link">Perfil</span>
          </a>
        </li>
        <hr>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-timer icon'></i>
            <span class="link">Modo Smart</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-book-reader icon'></i>
            <span class="link">Controle de Leituras</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-book-heart icon'></i>
            <span class="link">Diário Emocional</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-calendar icon'></i>
            <span class="link">Cronograma</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-book-bookmark icon'></i>
            <span class="link">Agenda</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-calendar-check icon'></i>
            <span class="link">Rotina</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-list-check icon'></i>
            <span class="link">Hábitos</span>
          </a>
        </li>
        <li class="list">
          <a href="#" class="nav-link">
            <i class='bx bx-line-chart icon'></i>
            <span class="link">Metas</span>
          </a>
        </li>
      </ul>
      <hr>
      <div class="bottom-content">
        <li class="list mode chk">
          <a href="#" class="nav-link">
            <i class="bx bx-sun icon sun2"></i>
            <i class="bx bx-moon icon moon2"></i>
            <span class="link">Mode</span>
          </a>
        </li>
        <li class="list exit">
          <a href="#" class="nav-link">
            <i class="bx bx-log-out icon"></i>
            <span class="link">Exit</span>
          </a>
        </li>
      </div>
    </div>
  </div>

  <section class="overlay"></section>

  <div> <?php include('cont.php '); ?> </div>
  <div> <?php include('modal.php '); ?> </div>

</body>
<script src="assets/scripts.min.js"></script>

</html>