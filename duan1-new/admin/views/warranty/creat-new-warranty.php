<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm gói bảo hành</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'warranty/save-creat-new-warranty' ?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên gói bảo hành: </label>
                            <input type="text" name="name_warranty" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['name_warranty-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="name_warranty"><?= $_GET['name_warranty-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Thời hạn bảo hành (tháng): </label>
                            <input type="number" name="warranty_w" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['warranty_w-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="warranty_w"><?= $_GET['warranty_w-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Giá tiền (đồng): </label>
                            <input type="number" name="price" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['price-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="price"><?= $_GET['price-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'warranty' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>