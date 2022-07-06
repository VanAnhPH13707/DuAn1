<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'product/save-update-product' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <input type="hidden" value="<?= $_GET['product_id'] ?>" name="product_id">
                        <?php if ($detail_pro['image_product'] != "") : ?>
                            <div>
                                <img style="width:120px; heigh:100px" src="<?= ADMIN . $detail_pro['image_product'] ?>" alt="">
                            </div>
                        <?php endif ?>
                        <br>
                        <div class="form-group">
                            <label for="">Tên danh mục: </label>
                            <select name="subcategory_id" id="" style="outline:none; width: 200px; border: 1px solid #AAAAAA; border-radius: 5px; margin-left: 10px; padding-left: 10px;">
                                <?php foreach ($subcate as $index => $l) : ?>
                                    <option value="<?= $l['subcategory_id'] ?>" <?php if ($l['subcategory_id'] == $_GET['subcategory_id']) echo 'selected'; ?>><?= $l['name_subcategory'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tên sản phẩm: </label>
                            <input type="text" value="<?= $detail_pro['name_product'] ?>" name="name_product" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh: </label><br>
                            <input type="file" name="image_product">
                        </div>
                        <div class="form-group">
                            <label for="">Giá (đồng): </label>
                            <input type="number" value="<?= $detail_pro['price_default'] ?>" name="price_default" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Thời gian bảo hành (tháng): </label>
                            <input type="number" value="<?= $detail_pro['warranty'] ?>" name="warranty" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả ngắn sản phẩm: </label>
                            <textarea class="form-control" name="sub_decription" id="box_text" cols="50" rows="3"><?= $detail_pro['sub_decription'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả chi tiết sản phẩm: </label>
                            <textarea name="decription" id="decription"><?= $detail_pro['decription'] ?></textarea>
                            <script>
                                CKEDITOR.replace('decription');
                            </script>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'product' ?> " class="btn btn-sm btn-danger" style="width: 50%; font-weight: bold;">Hủy</a>
                            &nbsp;
                            <button name="update-product" type="submit" style="width: 50%; font-weight: bold;" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>