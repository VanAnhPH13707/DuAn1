<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng bình luận</th>
                        <th>Hành động</th>
                    </thead>
                    <tbody>
                        <?php foreach($index_cmt as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['name_product'] ?></td>
                                <td><?= $item['cmp'] ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'comment/detail-comment?product_id=' . $item['product_id'] ?> " class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>