<!DOCTYPE html>
<!--=== Coding by OresteGbao | www.gabo.io === -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <!--<link rel="stylesheet" href="resources/css/style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="styles/sidenav.css">
     <link rel="stylesheet" href="styles/form.css">-->

    <link rel="stylesheet" href="/styles/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <!----===== Search for Iconscout icons CSS link
    https://iconscout.com/unicons/explore/line
  ===== -->

    <!--<title>Admin Dashboard Panel</title>-->

</head>
<body>
<nav class="sidenav">
    <div class="logo-name">
        <div class="logo-image">
            <!--<img src="images/logo.png" alt="">-->
            <img src="/images/logo.png" alt="logo cdafal">
        </div>

        <span class="logo_name">CDAFAL 68</span>
    </div>

    <!--<div class="menu-items">-->
        <!--<div class="float-left">-->
    <div class="flex menu-items">
        <ul class="">
            <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
            <li><a href="#">

                    <i class="uil uil-database"></i>
                    <span class="link-name">BDD</span>
                </a></li>
            <li><a href="#">
                    <i class="uil uil-bell"></i>
                    <span class="link-name">Notifications</span>
                </a></li>
            <li><a href="#">
                    <i class="uil uil-constructor"></i>
                    <span class="link-name">Activités</span>
                </a></li>

            <li><a href="#">
                    <i class="uil uil-image"></i>
                    <span class="link-name">Media</span>
                </a></li>
        </ul>
        <ul class="logout-mode">
            <li><a href="#">
                    <i class="uil uil-setting"></i>
                    <span class="link-name">Paramètres</span>
                </a></li>

            <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>


            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section class="maincontent">
    <div class="top">
        <i class="uil uil-angle-left-b sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>

        <!--<img src="images/profile.jpg" alt="">-->
    </div>

    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">Liens rapide</span>
            </div>

            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-database"></i>
                    <span class="text">Adhérents</span>
                    <span class="number">268</span>
                </div>
                <div class="box box2">
                    <i class="uil uil-kid"></i>
                    <span class="text">Enfants</span>
                    <span class="number">10</span>
                </div>
                <div class="box box3">
                    <i class="uil uil-euro-circle"></i>
                    <span class="text">Cotisations(2023)</span>
                    <span class="number">10,120</span>
                </div>
            </div>
        </div>
        @yield('recent_activities')

    </div>
</section>
@yield('content')

<script type="text/javascript" src="script.js"></script>
</body>
</html>


