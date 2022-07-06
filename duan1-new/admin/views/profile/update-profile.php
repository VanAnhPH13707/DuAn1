<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật thông tin cửa hàng</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'profile/save-update-profile' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <input type="hidden" value="<?= $_GET['profile_id'] ?>" name="profile_id">
                        <div class="form-group">
                            <label for="">Tên công ty: </label>
                            <input type="text" value="<?= $pro['name_company'] ?>" name="name_company" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại: </label>
                            <input type="number" value="<?= $pro['tel'] ?>" name="tel" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ: </label>
                            <textarea class="form-control" name="address_company" id="box_text" cols="50" rows="3"><?= $pro['address_company'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" value="<?= $pro['email'] ?>" name="email" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Map</label>
                            <textarea class="form-control" name="map" id="box_text" cols="50" rows="3"><?= $pro['map'] ?></textarea>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'profile' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button name="update-profile" type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>