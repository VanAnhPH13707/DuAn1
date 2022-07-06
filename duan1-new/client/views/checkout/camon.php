<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Trạng thái đặt hàng</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="home">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Trạng thái đặt hàng</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->



<!-- CONTAIN START -->
<section class="container">
    <div class="checkout-section pb-85 pt-55">
        <div class="row">

            <div class="col-xs-12">
                <div class="checkout-step mb-40">
                    <ul>
                        <li class="active">
                            <a href="payment">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">1</div>
                                </div>
                                <span>Thông tin</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="order-view">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">2</div>
                                </div>
                                <span>Tổng quan</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#ss">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">3</div>
                                </div>
                                <span>Trạng thái</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="checkout-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div>
                                <p class="notification" style="text-align: center; color: #005DA5; font-weight: bold;">
                                    <?php
                                    if (isset($_GET['msg'])) {
                                        $msg = $_GET['msg'];
                                        echo $msg;
                                    }
                                    ?>
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 250px; margin-top:50px">
                        <div class="col-xs-4">
                        </div>
                        <div class="col-xs-4">
                        </div>
                        <div class="col-xs-4">
                            <a href="home" class="btn btn-black">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->