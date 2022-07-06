<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá niêm yết (đồng)</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'product/creat-new-product' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($pro as $index => $item) : ?>
                            <tr style="justify-content: center;">
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['name_subcategory'] ?></td>
                                <td><img style="width:120px; heigh:100px" src="<?= ADMIN . $item['image_product'] ?>" alt=""></td>
                                <td><?= $item['name_product'] ?></td>
                                <td><?= number_format($item['price_default']) ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'product/detail-product?product_id=' . $item['product_id'] ?> " class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a name="update-product" href="<?= ADMIN_URL . 'product/update-product?product_id=' . $item['product_id'] . '&subcategory_id=' . $item['subcategory_id'] ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php if ($_SESSION['email']['role'] == 2) {
                                        echo "<a href='javascript:;' onclick='confirm_remove(" . '"' . ADMIN_URL . "product/del-product?product_id=" . $item['product_id'] .  '"' . "," . '"' . $item['name_product'] . '"' . ")' class='btn btn-sm btn-danger'>
                                        <i class='fas fa-trash'></i>
                                    </a>";
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>