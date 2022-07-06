<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'product/save-creat-new-product' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên danh mục: </label>
                            <select name="subcategory_id" id="" style="outline:none; width: 200px; border: 1px solid #AAAAAA; border-radius: 5px; margin-left: 10px; padding-left: 10px;">
                                <?php foreach ($subcate as $index => $l) : ?>
                                    <option value="<?= $l['subcategory_id'] ?>"><?= $l['name_subcategory'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tên sản phẩm: </label>
                            <input type="text" name="name_product" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['name_product-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="name_product"><?= $_GET['name_product-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh: </label><br>
                            <input type="file" name="image_product">
                            <?php if (isset($_GET['image_product-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="image_product"><?= $_GET['image_product-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Thời gian bảo hành (tháng): </label>
                            <input type="number" name="warranty" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['warranty-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="warranty"><?= $_GET['warranty-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Giá (đồng): </label>
                            <input type="number" name="price_default" class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['price_default-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="price_default"><?= $_GET['price_default-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả ngắn sản phẩm: </label>
                            <textarea class="form-control" name="sub_decription" id="box_text" cols="50" rows="3"></textarea>
                            <?php if (isset($_GET['sub_decription-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="sub_decription"><?= $_GET['sub_decription-err']; ?></span>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả chi tiết sản phẩm: </label>
                            <textarea name="decription" id="decription"></textarea>
                            <script>
                                CKEDITOR.replace('decription');
                            </script>
                            <?php if (isset($_GET['decription-err'])) : ?>
                                <span style="font-size:12px ;color: red; padding-left: 10px;" class="decription"><?= $_GET['decription-err']; ?></span>
                            <?php endif ?>
                        </div>

                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'product' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>