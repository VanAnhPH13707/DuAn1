<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới danh mục con</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'category/save-creat-new-subcategory' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                    <input type="hidden" value="<?= $_GET['category_id'] ?>" name="category_id">
                        <div class="form-group">
                            <label for="">Tên danh mục con</label>
                            <input type="text" name="name_subcategory" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['name_subcategory-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="name_subcategory"><?= $_GET['name_subcategory-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'category/detail-category?category_id=' . $_GET['category_id'] ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button name="creat-new-subcategory" type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>