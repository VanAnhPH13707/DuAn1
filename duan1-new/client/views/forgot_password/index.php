<!-- BANNER START -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Quên mật khẩu</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Quên mật khẩu</span></li>
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
                        <form action="<?= BASE_URL ?>checkmail" style="margin: 80px 0;" class="main-form full" method="post">
                            <div class="row">
                                <div class="col-xs-12 mb-20">
                                    <div class="heading-part heading-bg">
                                        <h2 class="heading">Quên mật khẩu</h2>
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
                                        <label for="login-email">Email</label><br>
                                        <input id="login-email" type="email" name="email" required="" placeholder="Email Address">
                                        <?php if (isset($_GET['email-err'])) : ?>
                                            <span style="font-size:12px ;color: red; padding-left: 10px;" class="email"><?= $_GET['email-err']; ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button name="checkmail" type="submit" class="btn-black right-side">Kiểm tra</button>
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