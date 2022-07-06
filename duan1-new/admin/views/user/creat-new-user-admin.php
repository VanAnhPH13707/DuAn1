<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới tài khoản Admin</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'user/save-creat-new-user' ?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Họ và tên: </label>
                            <input type="text" name="fullname" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['fullname-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="fullname"><?= $_GET['fullname-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="text" name="email" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['email-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="email"><?= $_GET['email-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại liên hệ: </label>
                            <input type="number" name="contract_number" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['contract_number-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="contract_number"><?= $_GET['contract_number-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu: </label>
                            <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['password-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="password"><?= $_GET['password-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu: </label>
                            <input type="password" name="repassword" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['repassword-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="repassword"><?= $_GET['repassword-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ: </label>
                            <textarea class="form-control" name="address" id="box_text" cols="50" rows="3"></textarea>
                            <?php if (isset($_GET['address-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="address"><?= $_GET['address-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'user' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>