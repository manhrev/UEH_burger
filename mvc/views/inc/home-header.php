<header>
        <!-- search -->
        <div id="tiva-searchBox" class="d-flex align-items-center text-center active">
            <div class="container">
                <span class="tiva-seachBoxClose">
                    <i class="zmdi zmdi-close"></i>
                </span>
                <div class="tiva-seachBoxInner">
                    <div class="title-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>Tìm kiếm</span>
                    </div>
                    <div class="description">
                        Tìm kiếm nhanh sản phẩm bạn cần bằng tên sản phẩm hoặc mã sản phẩm.
                    </div>
                    <!-- Block search module TOP -->
                    <div id="search" class="search-widget d-flex justify-content-center">
                        <form method="get" action="#">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input type="text" name="s" value="" placeholder="Nhập nội dung tìm kiếm ở đây" class="ui-autocomplete-input" autocomplete="off">
                            <button type="button">
                                Tìm
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="<?=BASE_URL?>">
                        <img class="logo-mobile img-fluid" src="<?=STATIC_URL?>img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">

                        <input type="text" name="s" value="" placeholder="Tìm kiếm">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <?php require_once "./mvc/views/inc/header/mobile-cart.php"?>
                    </div>
                </div>
            </div>
        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none">
            <div class="margin-0 row">

                <!-- menu -->
                <div class="d-flex icon-menu align-items-center justify-content-center">
                    <a href="#">
                        <i class="fa fa-bars" aria-hidden="true" id="icon-menu"></i>
                    </a>
                </div>


                <!-- logo -->
                <div class="d-flex align-items-center  flex-2">
                    <?php require_once "./mvc/views/inc/header/logo.php"?>
                </div>
                <div class="d-flex align-items-center justify-content-center navbar-expand-md main-menu">
                    <?php require_once "./mvc/views/inc/header/desktop_menu.php"?>
                </div>
                <!-- search and acount -->
                <div class="d-flex align-items-center justify-content-end" id="search_widget">
                    <div class="d-flex align-items-center justify-content-center search-header-top">
                        <i class="fa fa-search search"></i>
                    </div>
                    <div id="block_myaccount_infos" class="hidden-sm-down dropdown d-flex align-items-center justify-content-center">
                        <div class="myaccount-title">
                            <a href="#acount" data-toggle="collapse" class="acount">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="acount" class="collapse">
                            <?php require_once "./mvc/views/inc/header/account.php"?>
                        </div>
                    </div>
                    <div class="desktop_cart align-items-center d-flex">
                        <div class="blockcart block-cart cart-preview tiva-toggle">
                            <div class="header-cart tiva-toggle-btn">
                                <span class="cart-products-count">1</span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <?php require_once "./mvc/views/inc/header/desktop-cart.php"?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>