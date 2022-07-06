<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Đăng kí</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Đăng kí</span></li>
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
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                        <form class="main-form full" style="margin: 80px 0;" action="<?= BASE_URL ?>register" method="post">
                            <div class="row">
                                <div class="col-xs-12 mb-20">
                                    <div class="heading-part heading-bg">
                                        <h2 class="heading">Đăng ký tài khoản</h2>
                                    </div>
                                </div>
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
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="l-name">Họ Và Tên</label>
                                        <input type="text" id="l-nSame" required="" name="fullname" placeholder="Nhập tên">
                                        <?php if (isset($_GET['fullname-err'])) : ?>
                                            <span style="font-size:12px ;color: red; padding-left: 10px;" class="fullname"><?= $_GET['fullname-err']; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="login-email">Email </label>
                                        <input id="login-email" type="email" required="" name="email" placeholder="Nhập email">
                                        <?php if (isset($_GET['email-err'])) : ?>
                                            <span style="font-size:12px ;color: red; padding-left: 10px;" class="email"><?= $_GET['email-err']; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="login-pass">Mật khẩu</label>
                                        <input id="login-pass" type="password" required="" name="password" placeholder="Nhập mật khẩu">
                                        <?php if (isset($_GET['password-err'])) : ?>
                                            <span style="font-size:12px ;color: red; padding-left: 10px;" class="password"><?= $_GET['password-err']; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-box">
                                        <label for="re-enter-pass">Nhập lại mật khẩu</label>
                                        <input id="re-enter-pass" type="password" required="" name="repass" placeholder="Nhập lại mật khẩu">
                                        <?php if (isset($_GET['repass-err'])) : ?>
                                            <span style="font-size:12px ;color: red; padding-left: 10px;" class="repass"><?= $_GET['repass-err']; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button name="register" type="submit" class="btn-black right-side">Đăng ký</button>
                                </div>
                                <div class="col-xs-12">
                                    <br>
                                    <hr>
                                    <div class="new-account align-center mt-20">
                                        <span>Bạn đã có tài khoản</span>
                                        <a class="link" title="Register with Streetwear" href="login">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->