<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


<!-- product-detail06:46-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furnitica - Minimalist Furniture HTML Template</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">


    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">
</head>

<body id="product-detail">
    <!-- header -->
    <?php require_once "./mvc/views/inc/header.php" ?>
    <!-- !header -->

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Living Room</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Sofa</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                        <!-- category -->
                                        <?php require_once "./mvc/views/inc/main/categories.php"?>

                                        <!-- best seller -->
                                        <?php require_once "./mvc/views/inc/main/bestseller.php"?>

                                        <!-- product tag -->
                                        <?php require_once "./mvc/views/inc/main/tags.php"?>
                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9">
                                        <div class="main-product-detail">
                                            <h2>Lorem ipsum dolor</h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <div id="item1" class="tab-pane fade active in show">
                                                                    <img src="<?= STATIC_URL ?>img/product/1.jpg" alt="img">
                                                                </div>
                                                                <div id="item2" class="tab-pane fade">
                                                                    <img src="<?= STATIC_URL ?>img/product/2.jpg" alt="img">
                                                                </div>
                                                                <div id="item3" class="tab-pane fade">
                                                                    <img src="<?= STATIC_URL ?>img/product/3.jpg" alt="img">
                                                                </div>
                                                                <div id="item4" class="tab-pane fade">
                                                                    <img src="<?= STATIC_URL ?>img/product/5.jpg" alt="img">
                                                                </div>
                                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                    <i class="fa fa-expand"></i>
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">
                                                                <li class="active col">
                                                                    <a href="#item1" data-toggle="tab" aria-expanded="true" class="active show">
                                                                        <img src="<?= STATIC_URL ?>img/product/1.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item2" data-toggle="tab">
                                                                        <img src="<?= STATIC_URL ?>img/product/2.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item3" data-toggle="tab">
                                                                        <img src="<?= STATIC_URL ?>img/product/3.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item4" data-toggle="tab">
                                                                        <img src="<?= STATIC_URL ?>img/product/5.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <div class="modal-body">
                                                                                <div class="product-detail">
                                                                                    <div>
                                                                                        <div class="images-container">
                                                                                            <div class="js-qv-mask mask tab-content">
                                                                                                <div id="modal-item1" class="tab-pane fade active in show">
                                                                                                    <img src="<?= STATIC_URL ?>img/product/1.jpg" alt="img">
                                                                                                </div>
                                                                                                <div id="modal-item2" class="tab-pane fade">
                                                                                                    <img src="<?= STATIC_URL ?>img/product/2.jpg" alt="img">
                                                                                                </div>
                                                                                                <div id="modal-item3" class="tab-pane fade">
                                                                                                    <img src="<?= STATIC_URL ?>img/product/3.jpg" alt="img">
                                                                                                </div>
                                                                                                <div id="modal-item4" class="tab-pane fade">
                                                                                                    <img src="<?= STATIC_URL ?>img/product/5.jpg" alt="img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <ul class="product-tab nav nav-tabs">
                                                                                                <li class="active">
                                                                                                    <a href="#modal-item1" data-toggle="tab" class=" active show">
                                                                                                        <img src="<?= STATIC_URL ?>img/product/1.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#modal-item2" data-toggle="tab">
                                                                                                        <img src="<?= STATIC_URL ?>img/product/2.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#modal-item3" data-toggle="tab">
                                                                                                        <img src="<?= STATIC_URL ?>img/product/3.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#modal-item4" data-toggle="tab">
                                                                                                        <img src="<?= STATIC_URL ?>img/product/5.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        <div class="price-del">
                                                            <span class="price">£150.00</span>
                                                            <span class="float-right">
                                                                <span class="availb">Availability: </span>
                                                                <span class="check">
                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>IN STOCK</span>
                                                            </span>
                                                        </div>
                                                        <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum
                                                            auctor, nisi elit consequat etiam non auctor.</p>
                                                        <div class="option has-border d-lg-flex size-color">
                                                            <div class="size">
                                                                <span class="size">size :</span>
                                                                <select>
                                                                    <option value="">Choose your size</option>
                                                                    <option value="">M</option>
                                                                    <option value="">l</option>
                                                                    <option value="">xl</option>
                                                                </select>
                                                            </div>
                                                            <div class="colors">
                                                                <b class="title">Color : </b>
                                                                <span class="blue"></span>
                                                                <span class="yellow"></span>
                                                                <span class="pink"></span>
                                                                <span class="green"></span>
                                                                <span class="brown"></span>
                                                                <span class="red"></span>
                                                            </div>
                                                        </div>
                                                        <div class="has-border cart-area">
                                                            <div class="product-quantity">
                                                                <div class="qty">
                                                                    <div class="input-group">
                                                                        <div class="quantity">
                                                                            <span class="control-label">QTY : </span>
                                                                            <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control">

                                                                            <span class="input-group-btn-vertical">
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                    +
                                                                                </button>
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                    -
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <span class="add">
                                                                            <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                <span>Add to cart</span>
                                                                            </button>
                                                                            <a class="addToWishlist" href="#">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="product-minimal-quantity">
                                                            </p>
                                                        </div>
                                                        <div class="d-flex2 has-border">
                                                            <div class="btn-group">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-share"></i>
                                                                    <span>Share</span>
                                                                </a>
                                                                <a href="#" class="email">
                                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                    <span>SEN TO A FRIEND</span>
                                                                </a>
                                                                <a href="#" class="print">
                                                                    <i class="zmdi zmdi-print"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="rating-comment has-border d-flex">
                                                            <div class="review-description d-flex">
                                                                <span>REVIEW :</span>
                                                                <div class="rating">
                                                                    <div class="star-content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="read after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-commenting-o color" aria-hidden="true"></i>
                                                                    <span>READ REVIEWS (3)</span>
                                                                </a>
                                                            </div>
                                                            <div class="apen after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-pencil color" aria-hidden="true"></i>
                                                                    <span>WRITE A REVIEW</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <p>SKU :
                                                                <span class="content2">
                                                                    <a href="#">e-02154</a>
                                                                </span>
                                                            </p>
                                                            <p>Categories :
                                                                <span class="content2">
                                                                    <a href="#">Clothing</a>,
                                                                    <a href="#">Men's Jackets</a>
                                                                </span>
                                                            </p>
                                                            <p>tags :
                                                                <span class="content2">
                                                                    <a href="#">Jacket</a>,
                                                                    <a href="#">Overcoat</a>,
                                                                    <a href="#">Luxury</a>,
                                                                    <a href="#">men</a>,
                                                                    <a href="#">summer</a>,
                                                                    <a href="#">autumn</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description" class="active show">Description</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tag">Product Tags</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#review">Reviews (2)</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>

                                                    <div id="review" class="tab-pane fade">
                                                        <div class="spr-form">
                                                            <div class="user-comment">
                                                                <div class="spr-review">
                                                                    <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>Peter Capidal</strong> -
                                                                            <span>Apr 14, 2018</span>
                                                                        </span>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                            eu. Proin massa justo, eleifend fermentum varius
                                                                            quis, semper gravida quam. Cras nec enim sed
                                                                            lacus viverra luctus. Nunc quis accumsan mauris.
                                                                            Aliquam fermentum sit amet est id scelerisque.
                                                                            Nam porta risus metus.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-review preview2">
                                                                    <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>David James</strong> -
                                                                            <span>Apr 13, 2018</span>
                                                                        </span>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                            eu. Proin massa justo, eleifend fermentum varius
                                                                            quis, semper gravida quam. Cras nec enim sed
                                                                            lacus viverra luctus. Nunc quis accumsan mauris.
                                                                            Aliquam fermentum sit amet est id scelerisque.
                                                                            Nam porta risus metus.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="#" class="new-review-form">
                                                            <input type="hidden" name="review[rating]" value="3">
                                                            <input type="hidden" name="product_id">
                                                            <h3 class="spr-form-title">Write a review</h3>
                                                            <fieldset>
                                                                <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Your Rating</label>
                                                                    <fieldset class="ratings">
                                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    </fieldset>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-contact">
                                                                <div class="spr-form-contact-name">
                                                                    <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Enter your name">
                                                                </div>
                                                                <div class="spr-form-contact-email">
                                                                    <input class="spr-form-input spr-form-input-email form-control" value="" placeholder="Enter your email">
                                                                </div>
                                                            </fieldset>
                                                            <fieldset>
                                                                <div class="spr-form-review-body">
                                                                    <div class="spr-form-input">
                                                                        <textarea class="spr-form-input-textarea" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="submit">
                                                                <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Submit Review">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tag" class="tab-pane fade in">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php require_once "./mvc/views/inc/main/related.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <!-- footer -->
    <?php require_once "./mvc/views/inc/footer.php" ?>

    <?php require_once "./mvc/views/inc/mobile-menu.php" ?>


    <!-- Vendor JS -->
    <script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/tmpl.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/draggable-0.1.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.slider.js"></script>

    <!-- Template JS -->
    <script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- product-detail07:06-->

</html>