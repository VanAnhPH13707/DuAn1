<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật danh mục con</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'category/save-update-subcategory' ?>" method="post">
                    <div class="col-6 offset-3">
                        <input type="hidden" value="<?= $_GET['subcategory_id'] ?>" name="subcategory_id">
                        <input type="hidden" value="<?= $_GET['category_id'] ?>" name="category_id">
                        <div class="form-group">
                            <label for="">Tên danh mục con</label>
                            <input type="text" value="<?= $detail_subcate['name_subcategory'] ?>" name="name_subcategory" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'category/detail-category?category_id=' . $_GET['category_id'] ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>