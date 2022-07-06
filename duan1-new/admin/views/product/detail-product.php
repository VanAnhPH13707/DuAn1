<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Chi tiết sản phẩm</h3>
            </div>
            <div class="card-body">
                <br>
                <div class="col-10 offset-1" style="border: 3px solid #FF9966; border-radius: 20px; padding:20px;">
                    <div class="form-group">
                        <label for="">Ảnh: </label><br>
                        <img src="" alt="">
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục: </label>
                        <span><?= $pro['name_subcategory'] ?> | </span>
                        <label for="">Tên sản phẩm: </label>
                        <span><?= $pro['name_product'] ?> | </span>
                        <label for="">Lượt xem: </label>
                        <span><?= $pro['view'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Giá niêm yết: </label>
                        <span><?= number_format($pro['price_default']) ?> đồng</span>
                    </div>
                    <div class="form-group">
                        <label for="">Thời gian bảo hành (tháng): </label>
                        <span><?= $pro['warranty'] ?> | </span>
                        <label for="">Thời gian đăng sản phẩm (tháng): </label>
                        <span><?= $pro['post_date'] ?></span>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <label for="">Mô tả ngắn sản phẩm: </label>
                        <span><?= $pro['sub_decription'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả chi tiết sản phẩm: </label>
                        <span><?= $pro['decription'] ?></span>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="card-header">
                <h3 class="card-title">Thêm màu sắc mới cho sản phẩm</h3>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Tên màu sắc</th>
                        <th>Ảnh</th>
                        <th>Giá thêm (đồng)</th>
                        <th>Số lượng</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'product/creat-new-color?product_id='.$_GET['product_id'] ?>" class="btn btn-sm btn-success">Thêm mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($color as $index => $i) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $i['name_color'] ?></td>
                                <td><img style="width:120px; heigh:100px" src="<?= ADMIN . $i['image_color'] ?>" alt=""></td>
                                <td><?= number_format($i['price_add']) ?></td>
                                <td><?= $i['quantity'] ?></td>
                                <td>
                                    <a name="update-color" href="<?= ADMIN_URL . 'product/update-color?color_id=' . $i['color_id'] . '&product_id=' . $i['product_id'] ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php if ($_SESSION['email']['role'] == 2) {
                                        echo "<a href='javascript:;' onclick='confirm_remove(" . '"' . ADMIN_URL . "product/del-color?color_id=" . $i['color_id'] . "&product_id=" . $_GET["product_id"] . '"' . "," . '"' . $i['name_color'] . '"' . ")' class='btn btn-sm btn-danger'>
                                        <i class='fas fa-trash'></i>
                                    </a>";
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <br><br>
                </table>
            </div>

        </div>
    </div>
</div>