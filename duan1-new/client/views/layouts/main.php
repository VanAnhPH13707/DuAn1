<?php
if (isset($_SESSION['email'])) {
    $user_id = $_SESSION['email']['user_id'];
    $sql112 = "SELECT COUNT(product_id) AS sl FROM cart WHERE user_id = $user_id";
    $x = exeQuery($sql112, false);
}
$sql13 = "SELECT * FROM category";
$get_cate = exeQuery($sql13, true);

?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from webcotheme.com/html/streetwear/stw004/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 02:27:56 GMT -->

<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Hi-Store</title>
    <!-- SEO Meta
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/fotorama.css">
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?= CLIENT ?>css/responsive.css">

    <link rel="icon" href="https://img.icons8.com/color/48/000000/mac-os.png">
    <link rel="apple-touch-icon" href="<?= CLIENT ?>images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= CLIENT ?>images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= CLIENT ?>images/apple-touch-icon-114x114.html">
</head>

<body>
    <div class="se-pre-con"></div>
    <div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
        <div class="nl-popup-main">
            <div class="nl-popup-inner">
                <div class="row m-0">
                    <div class="col-sm-5 col-xs-0 hidden-xs p-0">
                        <div class="nl-popup-image">
                            <img src="<?= CLIENT ?>images/popup-image.jpg" alt="streetwear">
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12 p-0">
                        <div class="newsletter-inner">
                            <h2 class="main_title">News letter</h2>
                            <p>Use code : BFYUS for 20% off free shipping on your first order</p>
                            <form>
                                <input type="email" placeholder="Email Here...">
                                <button class="email-btn"></button>
                            </form>
                            <ul>
                                <li>
                                    <span>
                                        <input type="checkbox" class="checkbox">
                                    </span>
                                    <label>Don't show this popup again</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <!-- HEADER START -->
        <header class="navbar navbar-custom" id="header">
            <div class="header-middle">
                <div class="container">
                    <div class="header-inner">
                        <div class="row m-0">
                            <div class="col-md-4 col-sm-12 hidden-sm hidden-xs">
                                <div class="header-right-part float-none-sm">
                                    <ul>
                                        <li class="mobile-view-search">
                                            <div class="header_search_toggle mobile-view">
                                                <form action="search" method="get">
                                                    <div class="search-box">
                                                        <input type="text" name="keyword" value="<?php
                                                                                                    if (isset($_GET['keyword'])) {
                                                                                                        echo $_GET['keyword'];
                                                                                                    } else {
                                                                                                        echo "";
                                                                                                    }
                                                                                                    ?>" placeholder="Search" class="input-text">
                                                        <button type="submit" class="search-btn"></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="navbar-header float-none-sm">
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                                    <a class="navbar-brand page-scroll" href="home">
                                        <img alt="Streetwear" src="<?= CLIENT ?>images/logo.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="header-right-part right-side float-none-sm">
                                    <ul>
                                        <li class="mobile-view-search visible-sm visible-xs">
                                            <div class="header_search_toggle mobile-view">
                                                <form>
                                                    <div class="search-box">
                                                        <input type="text" placeholder="Search" class="input-text">
                                                        <button class="search-btn"></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="content">
                                            <a class="content-link">
                                                <span class="content-icon"></span>
                                            </a>
                                            <div class="content-dropdown" style="width:200px">
                                                <ul>
                                                    <?php
                                                    if (isset($_SESSION['email'])) {
                                                        if ($_SESSION['email']['role'] == 1) {
                                                            echo "<li><a href='" . ADMIN_URL . "'><span></span>Staff</a></li>";
                                                            echo "<li><a href='user_profile'><span></span>Thông tin</a></li>";
                                                            echo "<li><a href='logout'><span></span>Đăng xuất</a></li>";
                                                        } elseif ($_SESSION['email']['role'] == 2) {
                                                            echo "<li><a href='" . ADMIN_URL . "'><span></span>Admin</a></li>";
                                                            echo "<li><a href='user_profile'><span></span>Thông tin</a></li>";
                                                            echo "<li><a href='logout'><span></span>Đăng xuất</a></li>";
                                                        } else {
                                                            echo "<li><a href='user_profile'><span></span>Thông tin</a></li>";
                                                            echo "<li><a href='logout'><span></span>Đăng xuất</a></li>";
                                                        }
                                                    } else {
                                                        echo "<li><a href='login'><span></span>Đăng nhập</a></li>";
                                                        echo "<li><a href='register'><span></span>Đăng kí</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php if (isset($_SESSION['email'])) {
                                            echo "<li class='cart-icon'>
                                            <a href='#'>
                                                <span>
                                                    <small class='cart-notification'>" . $x['sl'] . "</small>
                                                </span>
                                                <div class='header-right-text'>Giỏ hàng</div>    
                                            </a>
                                            <div class='cart-dropdown header-link-dropdown'>
                                             <div class='clearfix'></div>
                                                <div class='clearfix'></div>
                                                <div class='mt-20'>
                                                    <a href='cart' class='btn-color btn'>Giỏ hàng</a>
                                                    <a href='view-invoice' class='btn-color btn right-side'>Trạng thái</a>
                                                </div>
                                            </div>
                                        </li>";
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div id="menu" class="navbar-collapse collapse left-side align-center">
                        <ul class="nav navbar-nav">
                            <li class="level"><a href="home" class="page-scroll">Trang chủ</a></li>
                            <?php foreach ($get_cate as $index => $j) : ?>
                                <li class="level"><a href="shop?category_id=<?= $j['category_id'] ?>" class="page-scroll"><?= $j['name_category'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->
        <?php include_once $view; ?>

        <!-- FOOTER START -->
        <div class="footer">
            <div class="footer-inner">
                <div class="footer-top ptb-40">
                    <div class="container">
                        <div class="row">
                            <div class="footer-static-block">
                                <!-- <span class="opener plus"></span> -->
                                <!--  Site Services Features Block Start  -->
                                <div class="col-sm-4">
                                    <div class="ser-feature-block">
                                        <div class="feature-box feature1">
                                            <div class="ser-title">Miễn phí giao hàng</div>
                                            <div class="ser-subtitle">Cho đơn trên 5 triệu đồng</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ser-feature-block">
                                        <div class="feature-box feature2">
                                            <div class="ser-title">Tri ân khách hàng</div>
                                            <div class="ser-subtitle">Nhiều ưu đãi lớn</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ser-feature-block">
                                        <div class="feature-box feature3">
                                            <div class="ser-title">Đổi trả sản phẩm</div>
                                            <div class="ser-subtitle">Trong vòng 15 ngày</div>
                                        </div>
                                    </div>
                                </div>
                                <!--  Site Services Features Block End  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="footer-middle mtb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">Information</h3>
                                    <ul class="footer-block-contant link">
                                        <li><a>About Us</a></li>
                                        <li><a>Delivery Information</a></li>
                                        <li><a>Privacy Policy</a></li>
                                        <li><a>Terms & Conditions</a></li>
                                        <li><a>Gift Certificates</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">Help</h3>
                                    <ul class="footer-block-contant link">
                                        <li><a>About Us</a></li>
                                        <li><a>Delivery Information</a></li>
                                        <li><a>Privacy Policy</a></li>
                                        <li><a>Terms & Conditions</a></li>
                                        <li><a>Gift Certificates</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">Guidance</h3>
                                    <ul class="footer-block-contant link">
                                        <li><a>About Us</a></li>
                                        <li><a>Delivery Information</a></li>
                                        <li><a>Privacy Policy</a></li>
                                        <li><a>Terms & Conditions</a></li>
                                        <li><a>Gift Certificates</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">Contact</h3>
                                    <ul class="footer-block-contant address-footer">
                                        <li>
                                            <p>Steetwear ltd</p>
                                        </li>
                                        <li>
                                            <p>600 Anton Boulevard Costa</p>
                                        </li>
                                        <li>
                                            <p>Mesa, California</p>
                                        </li>
                                        <li>
                                            <p><a>info@streetwear.com</a></p>
                                        </li>
                                        <li>
                                            <p>029-222-3255-222</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <hr>
                <div class="footer-bottom top">
                    <div class="container">
                        <div class="site-link align-center col-sm-12">
                            <ul>
                                <li><a href="introduce">Giới thiệu</a></li>
                                <li><a href="contact">Liên hệ</a></li>
                                <?php foreach ($get_cate as $index => $j) : ?>
                                    <li><a href="shop?category_id=<?= $j['category_id'] ?>"><?= $j['name_category'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="col-sm-12 align-center">
                            <div class="copy-right center-xs">© 2017 All Rights Reserved. Design By <a href="#">Webcotheme</a></div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer-bottom bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="payment left-side float-none-sm center-xs">
                                    <ul class="payment_icon">
                                        <li class="discover"><a></a></li>
                                        <li class="visa"><a></a></li>
                                        <li class="mastro"><a></a></li>
                                        <li class="paypal"><a></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-3">
                                <div class="footer_social pt-xs-15 center-xs mt-xs-15 right-side float-none-sm">
                                    <ul class="social-icon">
                                        <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                                        <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                                        <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                                        <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                                        <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-top">
            <div id="scrollup"></div>
        </div>
        <!-- FOOTER END -->
    </div>
    <script src="<?= CLIENT ?>js/jquery-1.12.3.min.js"></script>
    <script src="<?= CLIENT ?>js/bootstrap.min.js"></script>
    <script src="<?= CLIENT ?>js/jquery-ui.js"></script>
    <script src="<?= CLIENT ?>js/fotorama.js"></script>
    <script src="<?= CLIENT ?>js/jquery.magnific-popup.js"></script>
    <script src="<?= CLIENT ?>js/owl.carousel.min.js"></script>
    <script src="<?= CLIENT ?>js/custom.js"></script>

    <script>
        /* ------------ Newslater-popup JS Start ------------- */
        $(window).load(function() {
            $.magnificPopup.open({
                items: {
                    src: '#newslater-popup'
                },
                type: 'inline'
            }, 0);
        });
        /* ------------ Newslater-popup JS End ------------- */
    </script>

</body>

<!-- Mirrored from webcotheme.com/html/streetwear/stw004/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 02:33:29 GMT -->

</html>