<!DOCTYPE html>
<!--=== Coding by OresteGbao | www.gabo.io === -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="resources/css/style.css">
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
            <img src="https://lh3.googleusercontent.com/nJAOSkAhOtER2oFvifLRbdZnDEBgE2UHiY38EWaAt7Tv2rU55TuCiEDzrYpganXsMIiTiu5T93XzIwAr4ODJ73wRoZfgdyv2RM9PIX19e_toJACmT96e_xvfJjx_vEEremfsI_18JTD6V46iRs2tjDRSSuo_zLhTh4OCMgu5irlt4z9kHaVDhU-ji-WMuuLuwXmDY_pbRg18dF7vfxeXhfa8kVbCjvzB3wbcAT990QmbhT0msjFA7n-E-1K60KPe2c9nK0Nrf1GauLmJTQkNEU8mciMDfsGcK3ki7pMTaLrJ41kns_gIrQauhXaSNlLTj_Nz616A0_9uu9h38LN2nMVp0MuYWGRjPkuCt_CAZuCb5tOLaZ5nfhDo_3guyEqjyx-vnsSRAjd1FzHHN9gzE1dVgrPBkGlVNNGtT5HxzXX-njT4i-r5jIDTjj2nLhbUzG0YwolVtjNiqSClg2UiUVMnc86aiBwnZ5VdtZdLIZiXVD2UQhCCZntkz2GxRzppdhS9ldDl-WpeP5vcdlF9KEOc11rhHcR5mD7GGwbE2cZ9-DgDwMydRxFqvcncuO-yECWmYW5UvJ5KaoCXWEkp3tSxb7S2D4a6Z1eXvaS7GdVAMlvaZZYzG2PWxnH6FEMCrtV92MtybkxeeeAebQDlYPllNtR2ZFDk6gxgRBBSt5NgHH5RzTFl-jsdI7Q2wdkCgUZsrg9RaUz2NbDf8ygj6cxxrDMAEC8JRJCG8LaHbGsEtTUPsHoxZjf9UNOLnNxHqxlI6LRgZhDJ2JARXQT2pxe5WweIq_fj3aP-nBZz7GtC7EhnVRFyw5CG57u4GpExJ36wHxDyEi4Br-gakZ3KLmOqh6WsF7K8VnlMltclVPqpQmGv6r1AQl7jKA1UllIIZK-ISfdC2kjyA8H1h1B4cMazxmmI2hfOylmAkhPryFKAq1wg1zYry7WOmd2furThL9LIycUJnNqy_8Jw6JWSLtbJjRBW9CF2ZfxSftcpLN-1P1X_pcurEou9LFTgUG4DAg_w6ENaYkrJ8Upr0hdRDrdW=w1187-h968-no?authuser=0" alt="logo cdafal">
        </div>

        <span class="logo_name">CDAFAL 68</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Acceuil</span>
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

<section class="dashboard">
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


