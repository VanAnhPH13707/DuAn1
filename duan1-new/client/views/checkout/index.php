    <!-- BANNER STRAT -->
    <div class="banner inner-banner">
        <div class="container">
            <div class="bread-crumb mtb-60 center-xs">
                <div class="page-title">Thanh toán</div>
                <div class="bread-crumb-inner right-side float-none-xs">
                    <ul>
                        <li><a href="home">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                        <li><span>Thanh toán</span></li>
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
                                <li>
                                    <a href="#">
                                        <div class="step">
                                            <div class="line"></div>
                                            <div class="circle">2</div>
                                        </div>
                                        <span>Tổng quan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
                                    <div class="heading-part align-center">
                                        <h2 class="heading">Vui lòng điền vào thông tin giao hàng</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                                    <form action="order-view" method="post" class="main-form full">
                                        <div class="mb-20">
                                            <div class="row">
                                                <div class="col-xs-12 mb-20">
                                                    <div class="heading-part">
                                                        <h3 class="sub-heading">Địa chỉ giao hàng</h3>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-box">
                                                        <input type="text" name="fullname" required="" value="<?= $u['fullname'] ?>" placeholder="Họ và tên">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-box">
                                                        <input type="email" name="email" required="" value="<?= $u['email'] ?>" placeholder="Email" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-box">
                                                        <input type="number" name="contract_number" required="" value="<?php if ($u['contract_number'] == 0) {
                                                                                                    echo "";
                                                                                                } else {
                                                                                                    echo  0 . $u['contract_number'];
                                                                                                }  ?>" placeholder="Số điện thoại liên hệ">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="input-box">
                                                        <input type="text" required="" name="address" value="<?= $u['address'] ?>" placeholder="Địa chỉ nhận hàng">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-black right-side">Tiếp tục</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- CONTAINER END -->