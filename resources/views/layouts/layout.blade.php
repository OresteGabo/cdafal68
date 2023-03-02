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

     <link rel="stylesheet" href="/styles/sidenav.css">
     <!--<link rel="stylesheet" href="styles/form.css">-->

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
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-estate','label'=>"Dashboard"])
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-database','label'=>"BDD"])
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-bell','label'=>"Notifications"])
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-constructor','label'=>"Activités"])
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-image','label'=>"Media"])
        </ul>
        <ul class="logout-mode">
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-setting','label'=>"Paramètres"])
            @include('layouts.mainnav.link_li',['url'=>'/dashboard','icon'=>'uil uil-signout','label'=>"Déconnection"])
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

        <!--<div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>-->

        <!--<img src="images/profile.jpg" alt="">-->
    </div>

    <div class="dash-content">
        @yield('quick_links')
        @yield('more_data')
    </div>
</section>
<script type="text/javascript" src="script.js"></script>
</body>
</html>


