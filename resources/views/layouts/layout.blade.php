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

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <!----===== Search for Iconscout icons CSS link
    https://iconscout.com/unicons/explore/line
  ===== -->

    <!--<title>Admin Dashboard Panel</title>-->
    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root{
            /* ===== Colors ===== */
            --primary-color: #65655E;
            --panel-color: #FFF;
            --text-color: #000;
            --black-light-color: #707070;
            --border-color: #e6e5e5;
            --toggle-color: #DDD;
            --box1-color: #C6AFB1;
            --box2-color: #FFE6AC;
            --box3-color: #E7D1FC;
            --title-icon-color: #fff;
            --table-row-bg-color:#EEE;
            --active-bg-color: #c7ad9a;

            /* ====== Transition ====== */
            --tran-05: all 0.5s ease;
            --tran-03: all 0.3s ease;
            --tran-03: all 0.2s ease;
        }

        body{
            min-height: 100vh;
            /*background-color: var(--primary-color);*/
        }
        body.dark{
            --primary-color: #3A3B3C;
            --panel-color: #242526;
            --text-color: #CCC;
            --black-light-color: #CCC;
            --border-color: #4D4C4C;
            --toggle-color: #FFF;
            --box1-color: #3A3B3C;
            --box2-color: #3A3B3C;
            --box3-color: #3A3B3C;
            --title-icon-color: #CCC;
            --table-row-bg-color:#3A3B3C;
            --active-bg-color:rgba(146, 141, 141, 0.81);
        }

        nav{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px 14px;
            background-color: var(--panel-color);
            border-right: 1px solid var(--border-color);
            transition: var(--tran-05);
        }
        nav.close{
            width: 73px;
        }
        nav .logo-name{
            display: flex;
            align-items: center;
        }
        nav .logo-image{
            display: flex;
            justify-content: center;
            min-width: 75px;
        }
        nav .logo-image img{
            width: 40px;
            object-fit: cover;
            border-radius: 50%;
        }

        nav .logo-name .logo_name{
            font-size: 22px;
            font-weight: 600;
            color: var(--text-color);
            margin-left: 14px;
            transition: var(--tran-05);
        }
        nav.close .logo_name{
            opacity: 0;
            pointer-events: none;
        }
        nav .menu-items{
            margin-top: 40px;
            height: calc(100% - 90px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .menu-items li{
            list-style: none;
        }
        .menu-items li a{
            display: flex;
            align-items: center;
            min-height: 50px;

            text-decoration: none;
            position: relative;
        }
        .nav-links li a:hover:before{
            content: "";
            position: absolute;
            /*Design of a small dot that appear on hover*/
            left: -7px;
            height: 5px;
            width: 5px;
            border-radius: 50%;
            background-color: var(--primary-color);

        }
        body.dark li a:hover:before{
            background-color: var(--text-color);
        }
        .menu-items li a i{
            font-size: 24px;
            min-width: 45px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--black-light-color);
        }
        .menu-items li a .link-name{
            font-size: 18px;
            font-weight: 400;
            color: var(--black-light-color);
            transition: var(--tran-05);
        }
        nav.close li a .link-name{
            opacity: 0;
            pointer-events: none;
        }
        .nav-links li a:hover i,
        .nav-links li a:hover .link-name{
            color: var(--primary-color);
        }
        body.dark .nav-links li a:hover i,
        body.dark .nav-links li a:hover .link-name{
            color: var(--text-color);
        }
        .menu-items .logout-mode{
            padding-top: 10px;
            border-top: 1px solid var(--border-color);
        }
        .menu-items .mode{
            display: flex;
            align-items: center;
            white-space: nowrap;
        }
        .menu-items .mode-toggle{
            position: absolute;
            right: 14px;
            height: 50px;
            min-width: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        .mode-toggle .switch{
            position: relative;
            display: inline-block;
            height: 22px;
            width: 40px;
            border-radius: 25px;
            background-color: var(--toggle-color);
        }
        .switch:before{
            content: "";
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            height: 15px;
            width: 15px;
            background-color: var(--panel-color);
            border-radius: 50%;
            transition: var(--tran-03);
        }
        body.dark .switch:before{
            left: 20px;
        }

        .dashboard{
            position: relative;
            left: 250px;
            background-color: var(--panel-color);
            min-height: 100vh;
            width: calc(100% - 250px);
            padding: 10px 14px;
            transition: var(--tran-05);
        }
        nav.close ~ .dashboard{
            left: 73px;
            width: calc(100% - 73px);
        }
        .dashboard .top{
            position: fixed;
            top: 0;
            left: 250px;
            display: flex;
            width: calc(100% - 250px);
            justify-content: space-between;
            align-items: center;
            padding: 10px 14px;
            background-color: var(--panel-color);
            transition: var(--tran-05);
            z-index: 10;
        }
        nav.close ~ .dashboard .top{
            left: 73px;
            width: calc(100% - 73px);
        }
        .dashboard .top .sidebar-toggle{
            font-size: 26px;

            cursor: pointer;
            position:absolute;
            left:-20px;
            top:30px;


            transform: translateY(-50%) rotate(180deg);
            height: 40px;
            width: 40px;
            background-color: var(--primary-color);
            color: var(--title-icon-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard .top .search-box{
            position: relative;
            height: 45px;
            max-width: 600px;
            width: 100%;
            margin: 0 30px;
        }
        .top .search-box input{
            position: absolute;
            border: 1px solid var(--border-color);
            background-color: var(--panel-color);
            padding: 0 25px 0 50px;
            border-radius: 5px;
            height: 100%;
            width: 100%;
            color: var(--text-color);
            font-size: 15px;
            font-weight: 400;
            outline: none;
        }
        .top .search-box i{
            position: absolute;
            left: 15px;
            font-size: 22px;
            z-index: 10;
            top: 50%;
            transform: translateY(-50%);
            color: var(--black-light-color);
        }
        .top img{
            width: 40px;
            border-radius: 50%;
        }
        .dashboard .dash-content{
            padding-top: 50px;
        }
        .dash-content .title{
            display: flex;
            align-items: center;
            margin: 60px 0 30px 0;
        }
        .dash-content .title i{
            position: relative;
            height: 35px;
            width: 35px;
            background-color: var(--primary-color);
            border-radius: 6px;
            color: var(--title-icon-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .dash-content .title .text{
            font-size: 24px;
            font-weight: 500;
            color: var(--text-color);
            margin-left: 10px;
        }
        .dash-content .boxes{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .dash-content .boxes .box{
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 12px;
            width: calc(100% / 3 - 15px);
            padding: 15px 20px;
            background-color: var(--box1-color);
            transition: var(--tran-05);
        }
        .boxes .box i{
            font-size: 35px;
            color: var(--text-color);
        }
        .boxes .box .text{
            white-space: nowrap;
            font-size: 18px;
            font-weight: 500;
            color: var(--text-color);
        }
        .boxes .box .number{
            font-size: 40px;
            font-weight: 500;
            color: var(--text-color);
        }
        .boxes .box.box2{
            background-color: var(--box2-color);
        }
        .boxes .box.box3{
            background-color: var(--box3-color);
        }
        .dash-content .activity .activity-data{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .collapse {
            border-collapse: collapse;
        }

        .separate {
            border-collapse: separate;
        }

        table {
            display: inline-table;
            margin: 1em;
            min-width:80%;

            color:var(--text-color);
            box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
        }
        table th{
            background-color: var(--box2-color);

        }
        table th,
        table td {
            text-align: center;
            padding:10px 10px;
        }
        tr:nth-of-type(odd) {
            background:var(--table-row-bg-color);
        }

        @media (max-width: 1000px) {
            nav{
                width: 73px;
            }
            nav.close{
                width: 250px;
            }
            nav .logo_name{
                opacity: 0;
                pointer-events: none;
            }
            nav.close .logo_name{
                opacity: 1;
                pointer-events: auto;
            }
            nav li a .link-name{
                opacity: 0;
                pointer-events: none;
            }
            nav.close li a .link-name{
                opacity: 1;
                pointer-events: auto;
            }
            nav ~ .dashboard{
                left: 73px;
                width: calc(100% - 73px);
            }
            nav.close ~ .dashboard{
                left: 250px;
                width: calc(100% - 250px);
            }
            nav ~ .dashboard .top{
                left: 73px;
                width: calc(100% - 73px);
            }
            nav.close ~ .dashboard .top{
                left: 250px;
                width: calc(100% - 250px);
            }
            .activity .activity-data{
                overflow-X: scroll;
            }
        }

        @media (max-width: 780px) {
            .dash-content .boxes .box{
                width: calc(100% / 2 - 15px);
                margin-top: 15px;
            }
        }
        @media (max-width: 560px) {
            .dash-content .boxes .box{
                width: 100% ;
            }
        }
        @media (max-width: 400px) {
            nav{
                width: 0px;
            }
            nav.close{
                width: 73px;
            }
            nav .logo_name{
                opacity: 0;
                pointer-events: none;
            }
            nav.close .logo_name{
                opacity: 0;
                pointer-events: none;
            }
            nav li a .link-name{
                opacity: 0;
                pointer-events: none;
            }
            nav.close li a .link-name{
                opacity: 0;
                pointer-events: none;
            }
            nav ~ .dashboard{
                left: 0;
                width: 100%;
            }
            nav.close ~ .dashboard{
                left: 73px;
                width: calc(100% - 73px);
            }
            nav ~ .dashboard .top{
                left: 0;
                width: 100%;
            }
            nav.close ~ .dashboard .top{
                left: 0;
                width: 100%;
            }
            .dashboard .top .sidebar-toggle{
                left:3px;
            }
        }



        /*Les boutons de pagination*/
        .pg{
            /*border:1px solid black;*/
            text-align: center;
            /*justify-content: center;
            align-items: center;*/

            margin-bottom: 50px;

        }
        .pagination {
            padding:0;
            display: inline-block;
            /*color: rgba(146, 141, 141, 0.81);*/
        }

        .pagination a {
            color: var(--text-color);
            /*float: left;
            padding: 8px 16px;*/
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
        }

        .pagination a.active {
            background-color: var(--active-bg-color);
            color: var(--text-color);
            /*border: 1px solid #4CAF50;*/
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}


        .select-box{
            display:block;
            /*border:1px solid green;*/

        }
        select{
            border:none;
            padding:10px;
            min-width:200px;

        }
        .select-box .icon{
            width:100%;
            padding:10px;
        }

        .select-box a{
            color:var(--text-color);
        }


        table a{
            padding:3px 15px;
            background:var(--active-bg-color);
            border-radius:5px;
            border:3px #444;
            text-decoration: none;
            color:var(--text-color);
        }

    </style>
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
        @yield('recent_activities');

    </div>
</section>
@yield('content')

<script type="text/javascript" src="script.js"></script>
</body>
</html>


