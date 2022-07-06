<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Chi tiết Bình luận</h3>
            </div>
            <div class="card-body">
                <br>
                <div class="col-10 offset-1" style="border: 3px solid #FF9966; border-radius: 20px; padding:20px;">
                    <label for="">Tên sản phẩm: </label>
                    <span><?= $d_product['name_product'] ?></span>
                </div>
            </div>
            <div class="card-header">
                <h3 class="card-title">Bình luận</h3>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Email</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </thead>
                    <tbody>
                        <?php foreach ($detail_comment as $index => $i) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $i['email'] ?></td>
                                <td><?= $i['content'] ?></td>
                                <td><?= $i['date_comment'] ?></td>
                                <td><?php
                                    if ($i['status'] == 0) {
                                        echo "Hiển thị";
                                    } else {
                                        echo "Không hiển thị";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'comment/change-comment?comment_id=' . $i['comment_id'] . '&status=' . $i['status'] . '&product_id=' . $_GET['product_id'] ?> " class="btn btn-sm btn-success">
                                        <i class="fas fa-exchange-alt"></i> Thay đổi trạng thái
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'comment/del-comment?comment_id=' . $i['comment_id'] . '&product_id=' . $_GET['product_id'] ?>', '<?= 'Bình luận ' . $index + 1 ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>