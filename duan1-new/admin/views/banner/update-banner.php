<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm banner</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'banner/save-update-banner' ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $_GET['banner_id'] ?>" name="banner_id">
                    <div class="col-6 offset-3">
                        <?php if ($upbanner['image_banner'] != "") : ?>
                            <div>
                                <img style="width:120px; heigh:100px" src="<?= ADMIN . $upbanner['image_banner'] ?>" alt="">
                            </div>
                            <br>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="">Ảnh: </label><br>
                            <input type="file" name="image_banner">
                        </div>
                        <div class="form-group">
                            <label for="">Link: </label>
                            <input type="text" name="link" class="form-control" value=<?= $upbanner['link'] ?> placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'banner' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>