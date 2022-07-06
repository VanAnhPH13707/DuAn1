<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật tài khoản Admin</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'user/save-update-user' ?>" method="post">
                    <div class="col-6 offset-3">
                        <input type="hidden" value="<?= $_GET['user_id'] ?>" name="user_id">
                        <input type="hidden" value="<?= $_GET['role'] ?>" name="role">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" value="<?= $detail_user['email'] ?>" name="email" disabled class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" value="<?= $detail_user['fullname'] ?>" name="fullname" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ: </label>
                            <textarea class="form-control" name="address" id="box_text" cols="50" rows="3"><?= $detail_user['address'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input name="contract_number" type="number" value="0<?= $detail_user['contract_number'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'user' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>