<!-- BANNER STRAT -->
<div class="banner inner-banner">
  <div class="container">
    <div class="bread-crumb mtb-60 center-xs">
      <div class="page-title">Tài khoản của tôi</div>
      <div class="bread-crumb-inner right-side float-none-xs">
        <ul>
          <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
          <li><span>Tài khoản của tôi</span></li>
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
      <div class="col-md-3 col-sm-4">
        <div class="account-sidebar account-tab mb-xs-30">
          <div class="tab-title-bg">
            <div class="heading-part">
              <div class="sub-title"><span></span> Tài khoản của tôi</div>
            </div>
          </div>
          <div class="account-tab-inner">
            <ul class="account-tab-stap">
              <li id="step1" class="active">
                <a href="javascript:void(0)">Tổng quan tài khoản<i class="fa fa-angle-right"></i>
                </a>
              </li>
              <li id="step2">
                <a href="javascript:void(0)">Chi tiết tài khoản<i class="fa fa-angle-right"></i>
                </a>
              </li>
              <li id="step3">
                <a href="javascript:void(0)">Đổi mật khẩu<i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php

      ?>
      <div class="col-md-9 col-sm-8">
        <div id="data-step1" class="account-content" data-temp="tabdata">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading-part heading-bg mb-30">
                <h2 class="heading m-0">Tổng quan tài khoản</h2>
              </div>
            </div>
          </div>
          <div class="mb-30">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part">
                  <h3 class="sub-heading">Hello <?= $s['fullname'] ?></h3>
                </div>
                <p>Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi. <a class="account-link" id="subscribelink" href="index.php">Bấm vào đây để xem shop</a></p>
              </div>
            </div>
          </div>
          <div class="m-0">
            <div class="row">
              <div class="col-xs-12 mb-20">
                <div class="heading-part">
                  <h3 class="sub-heading">Thông tin tài khoản</h3>
                </div>
                <hr>
              </div>
              <div class="col-sm-12">
                <div class="cart-total-table address-box commun-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Thông tin</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading">
                                <b><?= $s['fullname'] ?></b>
                              </li>
                              <li>
                                <p>Email: <?= $s['email'] ?></p>
                              </li>
                              <li>
                                <p>Số điện thoại: 0<?php if ($s['contract_number'] == 0) {
                                                      echo "";
                                                    } else {
                                                      echo $s['contract_number'];
                                                    } ?></p>
                              </li>
                              <li>
                                <p>Địa chỉ: <?= $s['address'] ?></p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
        </div>
        <div id="data-step2" class="account-content" data-temp="tabdata" style="display:none">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading-part heading-bg mb-30">
                <h2 class="heading m-0">Thay đổi thông tin</h2>
              </div>
            </div>
          </div>
          <div class="m-0">
            <form class="main-form full" action="user_profile" method="POST">
              <input type="hidden" value="<?= $s['fullname']?>" name="fullname">
              <input type="hidden" value="<?= $s['contract_number']?>" name="contract_number">
              <input type="hidden" value="<?= $s['address']?>" name="address">
              <div class="mb-20">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part">
                      <h3 class="sub-heading">Địa chỉ nhận hàng</h3>
                    </div>
                    <hr>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <input type="text" required="" placeholder="Họ và tên" <?php if ($_SESSION['email']['role'] == 1 || $_SESSION['email']['role'] == 2) {
                                                                                echo "disabled";
                                                                              } else {
                                                                                echo "";
                                                                              } ?> name="fullname" value="<?= $s['fullname'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <input type="email" required="" placeholder="Email" value="<?= $s['email'] ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <input type="text" required="" placeholder="Số điện thoại liên hệ" <?php if ($_SESSION['email']['role'] == 1 || $_SESSION['email']['role'] == 2) {
                                                                                echo "disabled";
                                                                              } else {
                                                                                echo "";
                                                                              } ?> name="contract_number" value="<?php if ($s['contract_number'] == 0) {
                                                                                                                          echo "";
                                                                                                                        } else {
                                                                                                                          echo  0 . $s['contract_number'];
                                                                                                                        }  ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-12">
                    <div class="input-box">
                      <input type="text" required="" placeholder="Địa chỉ nhận hàng" <?php if ($_SESSION['email']['role'] == 1 || $_SESSION['email']['role'] == 2) {
                                                                                echo "disabled";
                                                                              } else {
                                                                                echo "";
                                                                              } ?> name="address" value="<?= $s['address'] ?>">
                      <span>Vui lòng cung cấp địa chỉ chi tiết!</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="row">
                  <div class="col-sm-12">
                    <input type="hidden" name="user_id" value="<?= $s['user_id'] ?>">
                    <button class="btn btn-black right-side" name="user_profile" type="submit">Thay đổi</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="data-step3" class="account-content" data-temp="tabdata" style="display:none">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading-part heading-bg mb-30">
                <h2 class="heading m-0">Đổi mật khẩu</h2>
              </div>
            </div>
          </div>
          <form class="main-form full" action="<?= BASE_URL ?>change_password" method="POST">
            <div class="row">
              <div class="col-xs-12">
                <div class="input-box">
                  <label for="old-pass">Mật khẩu cũ</label>
                  <input type="password" placeholder="Nhập mật khẩu cũ" required="" name="old_pass">
                  <?php if (isset($_GET['old_pass-err'])) : ?>
                    <span style="font-size:12px ;color: red; padding-left: 10px;" class="old_pass"><?= $_GET['old_pass-err']; ?></span>
                  <?php endif ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-box">
                  <label for="login-pass">Mật khẩu mới</label>
                  <input type="password" placeholder="Nhập mật khẩu mới" required="" name="login_pass">
                  <?php if (isset($_GET['login_pass-err'])) : ?>
                    <span style="font-size:12px ;color: red; padding-left: 10px;" class="login_pass"><?= $_GET['login_pass-err']; ?></span>
                  <?php endif ?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-box">
                  <label for="re-enter-pass">Nhập lại mật khẩu</label>
                  <input type="password" placeholder="Nhập lại mật khẩu" required="" name="re_enter_pass">
                  <?php if (isset($_GET['re_enter_pass-err'])) : ?>
                    <span style="font-size:12px ;color: red; padding-left: 10px;" class="re_enter_pass"><?= $_GET['re_enter_pass-err']; ?></span>
                  <?php endif ?>
                </div>
              </div>
              <div class="col-xs-12">
                <input type="hidden" name="user_id" value="<?= $s['user_id'] ?>">
                <button class="btn-black" type="submit" name="change_password">Thay đổi</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->
<!-- abdjshadkjhsalkd -->