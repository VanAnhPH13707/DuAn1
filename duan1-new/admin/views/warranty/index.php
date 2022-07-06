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
                        <th>Gói bảo hành</th>
                        <th>Thời hạn bảo hành (tháng)</th>
                        <th>Giá tiền (đồng)</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'warranty/creat-new-warranty' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($warr as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['name_warranty'] ?></td>
                                <td><?= $item['warranty_w'] ?></td>
                                <td><?= number_format($item['price']) ?></td>
                                <td>
                                    <a name="update-warranty" href="<?= ADMIN_URL . 'warranty/update-warranty?warranty_id=' . $item['warranty_id']  ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php
                                    if ($_SESSION['email']['role'] == 2) {
                                        echo "<a href='javascript:;' onclick='confirm_remove(".'"' .ADMIN_URL . "warranty/del-warranty?warranty_id=" . $item['warranty_id'] . '"'.", ". '"' . $item['name_warranty'] . '"' . ")' class='btn btn-sm btn-danger'>
                                        <i class='fas fa-trash'></i>
                                    </a>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>