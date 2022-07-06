<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm banner</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'banner/save-creat-new-banner' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Ảnh: </label><br>
                            <input type="file" name="image_banner">
                            <?php if (isset($_GET['image_banner-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="image_banner"><?= $_GET['image_banner-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Link: </label>
                            <input type="text" name="link" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['link-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="link"><?= $_GET['link-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'banner' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>