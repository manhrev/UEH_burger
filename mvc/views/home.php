<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- home509:49-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta property="og:type" content="website">

    <meta property="og:url" content="<?= BASE_URL ?>">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta property="og:site_name" content="UEH Burger">

    <title>UEH Burger</title>
    <meta property="og:title" content="UEH Burger">
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
    <meta name="keywords" content="UEH Burger">
    <meta name="description" content="UEH Burger là chuỗi cửa hàng thức ăn nhanh nổi tiếng thế giới với công thức Hamberger đột phá và 100% nguyên liệu thịt bò nhập từ Úc.">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <?php require_once "./mvc/views/inc/font_inc/font.php" ?>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">


</head>

<body id="home5">

    <!-- contact pop -->
    <?php require_once "./mvc/views/inc/phone.php" ?>
    <?php require_once "./mvc/views/inc/fb-messenger.php" ?>

    <!-- header -->
    <?php require_once "./mvc/views/inc/home-header.php" ?>
    <!-- !header -->

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <div class="menu-banner d-xs-none">
                <div class="tiva-verticalmenu block">
                    <div class="box-content">
                        <!-- <div class="verticalmenu" role="navigation">
                            <ul class="menu level1">
                                <li class="item parent">
                                    <a href="#" class="hasicon" title="SIDE TABLE">
                                        <img src="<?= STATIC_URL ?>img/home/table-lamp.png" alt="img">SIDE TABLE
                                    </a>
                                    <div class="dropdown-menu menu-1">
                                        <div class="menu-items">
                                            <ul>
                                                <li class="item">
                                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                </li>
                                                <li class="item parent-submenu">
                                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                    <span class="show-sub fa-active-sub"></span>
                                                    <div class="dropdown-submenu">
                                                        <div class="menu-items">
                                                            <ul>
                                                                <li class="item">
                                                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Voluptate">Voluptate</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Tongue Est">Tongue Est</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Voluptate">Voluptate</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Tongue Est">Tongue Est</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="item parent group">
                                    <a href="#" class="hasicon" title="FI">
                                        <img src="<?= STATIC_URL ?>img/home/fireplace.png" alt="img">FIREPLACE
                                    </a>
                                    <div class="dropdown-menu menu-2">
                                        <div class="menu-items">
                                            <div class="item">
                                                <div class="menu-content">
                                                    <div class="tags">
                                                        <div class="title float-left">
                                                            <b>DINNING ROOM</b>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="#">Toshiba</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Samsung</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">LG</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sharp</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Electrolux</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Hitachi</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Panasonic</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Mitsubishi Electric</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Daikin</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Haier</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tags">
                                                        <div class="title float-left">
                                                            <b>BATHROOM</b>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="#">Toshiba</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Samsung</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">LG</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sharp</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Electrolux</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Hitachi</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Panasonic</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Mitsubishi Electric</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Daikin</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Haier Media</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Gee</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Digimart</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Vitivaa</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sanaky</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sunshine</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tags">
                                                        <div class="title float-left">
                                                            <b>LIVING ROOM</b>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="#">Media</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Gee</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Digimart</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Vitivaa</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sanaky</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sunshine</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Toshiba</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Samsung</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">LG</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sharp</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Electrolux</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Hitachi</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Panasonic</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Mitsubishi Electric</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Daikin</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Haier</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tags">
                                                        <div class="title float-left">
                                                            <b>BEDROOM</b>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="#">LG</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sharp</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Electrolux</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Hitachi</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Panasonic</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Mitsubishi Electric</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Daikin</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Haier</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tags">
                                                        <div class="title float-left">
                                                            <b>KITCHEN</b>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="#">LG</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sharp</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Electrolux</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Hitachi</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Panasonic</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Mitsubishi Electric</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Daikin</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Haier</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tags">
                                                        <div class="title float-left">
                                                            <b>Blender</b>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="#">LG</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Sharp</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Electrolux</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Hitachi</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Panasonic</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Mitsubishi Electric</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Daikin</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#">Haier</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item group-category-img parent group">
                                    <a href="#" class="hasicon" title="TABLE LAMP">
                                        <img src="<?= STATIC_URL ?>img/home/table-lamp.png" alt="img">TABLE LAMP
                                    </a>
                                    <div class="dropdown-menu menu-3">
                                        <div class="menu-items">
                                            <div class="item">
                                                <div class="menu-content">
                                                    <div class="row group-category">
                                                        <div class="mt-20">
                                                            <div class="d-flex">
                                                                <div class="col">
                                                                    <span class="menu-title">Coventry dining</span>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">Accessories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Activewear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">ASOS Basic Tops</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Bags &amp; Purses</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Beauty</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Coats &amp; Jackets</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Curve &amp; Plus Size</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col">
                                                                    <span class="menu-title">Amara stools</span>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">Accessories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Activewear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">ASOS Basic Tops</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Bags &amp; Purses</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Beauty</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Coats &amp; Jackets</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Curve &amp; Plus Size</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="col">
                                                                    <span class="menu-title">Kingston dining</span>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">Accessories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Activewear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">ASOS Basic Tops</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Bags &amp; Purses</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Beauty</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Coats &amp; Jackets</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Curve &amp; Plus Size</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col">
                                                                    <span class="menu-title">Ellinger dining</span>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">Accessories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Activewear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">ASOS Basic Tops</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Bags &amp; Purses</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Beauty</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Coats &amp; Jackets</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Curve &amp; Plus Size</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ml-15">
                                                            <a href="#">
                                                                <img class="img-fluid" src="<?= STATIC_URL ?>img/home/img-menu.jpg" alt="img">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="OTTOMAN">
                                        <img src="<?= STATIC_URL ?>img/home/ottoman.png" alt="img">OTTOMAN
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="ARMCHAIR">
                                        <img src="<?= STATIC_URL ?>img/home/armchair.png" alt="img">ARMCHAIR
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="CUSHION">
                                        <img src="<?= STATIC_URL ?>img/home/cushion.png" alt="img">CUSHION
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="COFFEE TABLE">
                                        <img src="<?= STATIC_URL ?>img/home/coffee_table.png" alt="img">COFFEE TABLE</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="SHELF">
                                        <img src="<?= STATIC_URL ?>img/home/shelf.png" alt="img">SHELF
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="SOFA">
                                        <img src="<?= STATIC_URL ?>img/home/sofa.png" alt="img">SOFA
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="DRESSING TABLE">
                                        <img src="<?= STATIC_URL ?>img/home/dressing.png" alt="img">DRESSING TABLE</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                                        <img src="<?= STATIC_URL ?>img/home/windown.png" alt="img">WINDOWN CURTAIN</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="CHANDELIER">
                                        <img src="<?= STATIC_URL ?>img/home/chandelier.png" alt="img">CHANDELIER
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="CEILING FAN">
                                        <img src="<?= STATIC_URL ?>img/home/ceiling_fan.png" alt="img">CEILING FAN</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="WARDROBE">
                                        <img src="<?= STATIC_URL ?>img/home/wardrobe.png" alt="img">WARDROBE
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="FLOOR LAMP">
                                        <img src="<?= STATIC_URL ?>img/home/floor_lamp.png" alt="img">FLOOR LAMP</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="VASE-FLOWER">
                                        <img src="<?= STATIC_URL ?>img/home/vase-flower.png" alt="img">VASE-FLOWER
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="BED">
                                        <img src="<?= STATIC_URL ?>img/home/bed.png" alt="img">BED
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="BED GIRL">
                                        <img src="<?= STATIC_URL ?>img/home/bed.png" alt="img">BED GIRL</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="BED BOY">
                                        <img src="<?= STATIC_URL ?>img/home/bed.png" alt="img">BED BOY</a>
                                </li>
                                <li class="more item">Show More</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center align-items-center header-top-left pull-left">
                            <div class="toggle-nav act">
                                <div class="btnov-lines-large">
                                    <i class="zmdi zmdi-close"></i>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <div class="row justify-content-center mt-5">
                            <div class="title-product justify-content-between mt-4">
                                <h2>Danh mục món ăn</h2>
                                <p style='text-align: center'>Các Danh mục món ăn chúng tôi cung cấp, <br><a href="<?= BASE_URL ?>san-pham">xem Tất cả món ăn ở đây</a></p>
                            </div>
                        </div>
                        <div class="tab-content row">
                            <!-- banner -->
                            <div class="spacing-10 group-image-special">
                                <div class="row">

                                    <?php foreach ($data['categoriesBanner'] as $category) { ?>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="block">
                                                <div class="effect">
                                                    <a style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" href="<?= BASE_URL . 'danh-muc/' . $category['url'] ?>">
                                                        <span style="color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><?= $category['name'] ?></span>
                                                        <img class="img-fluid width-100" src="<?= $category['image'] ?>" alt="banner-1" title="banner-1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>

                            

                            <!--FEATURED PRODUCTS -->
                            <div class="featured-product">
                                <div class="title-tab-content  text-center">
                                    <div class="title-product justify-content-between">
                                        <h2>Món ăn nổi bật</h2>
                                        <p>Những món ăn được mua nhiều</p>
                                    </div>
                                </div>
                                <div class="tab-content row">

                                    <?php foreach ($data['SPnoibat'] as $sp) { ?>
                                        <div class="col-md-3 item text-center card border-0">
                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                <div class="thumbnail-container">
                                                    <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?> " style="">
                                                        <?php $images = explode(',', $sp['images']) ?>

                                                        <img class="img-fluid image-cover" src="<?= $images[0] ?>" alt="img" style="">
                                                        <?php if (isset($images[1])) { ?>
                                                            <img class="img-fluid image-secondary" src="<?= $images[1] ?>" alt="img" style="">
                                                        <?php } ?>
                                                    </a>
                                                    <div class="highlighted-informations">
                                                        <div class="variant-links">
                                                            <a class="color beige" title="Beige"></a>
                                                            <a class="color orange" title="Orange"></a>
                                                            <a class="color green" title="Green"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-title">
                                                            <a style="text-transform: uppercase" href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>"><?= $sp['name'] ?></a>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="star-content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">
                                                                    <?php if ($sp['price'] > 0) echo number_format($sp['price']) . 'đ';
                                                                    else echo 'Liên hệ' ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-center">
                                                        <!-- <form action="<?=BASE_URL?>san-pham/<?=$sp['url']?>" method="post" class="formAddToCart">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <button class="add-to-cart" data-button-action="add-to-cart">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </button>
                                                        </form> -->
                                                        <!-- <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a> -->
                                                        <a href="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>

                                <div class="content-showmore text-center has-showmore">
                                    <a href="<?= BASE_URL ?>san-pham/bo-loc/moi-nhat" type="button" class="btn btn-default novShowMore">
                                        <span>Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php require_once "./mvc/views/inc/home-footer.php" ?>

    <!-- menu mobie left -->
    <?php require_once "./mvc/views/inc/mobile-menu.php" ?>
    <!-- Page Loader -->
    <!-- <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div> -->


    <!-- Vendor JS -->
    <script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>

    <!-- Template JS -->
    <script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- home510:09-->

</html>