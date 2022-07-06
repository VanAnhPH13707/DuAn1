<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>SDT</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đặt hàng</th>
                        <th>Trạng thái</th>


                    </thead>
                    <tbody>
                        <?php foreach ($x as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['code'] ?></td>
                                <td><?= $item['fullname'] ?></td>
                                <td><?php
                                    if ($item['contract_number'] > 0) {
                                        echo "0" . $item['contract_number'];
                                    } else {
                                        echo "";
                                    }
                                    ?></td>
                                <td><?= $item['address'] ?></td>
                                <td><?= $item['create_at'] ?></td>
                                <td>
                                    <form action="<?= ADMIN_URL . 'status_invoice?invoice_id=' . $item['invoice_id'] ?>" method="post">
                                        <select style="color: #303030; border: 1px solid #869099; outline: none; border-radius:5px; margin-bottom:5px;" name="status" id="">
                                            <option value="0" <?= $item['status'] == 0 ? 'selected' : ''; ?>>Chờ xác nhận</option>
                                            <option value="1" <?= $item['status'] == 1 ? 'selected' : ''; ?>>Hủy đơn</option>
                                            <option value="2" <?= $item['status'] == 2 ? 'selected' : ''; ?>>Đã xác nhận</option>
                                            <option value="3" <?= $item['status'] == 3 ? 'selected' : ''; ?>>Đang giao hàng</option>
                                            <option value="4" <?= $item['status'] == 4 ? 'selected' : ''; ?>>Giao hàng thành công</option>
                                            <option value="5" <?= $item['status'] == 5 ? 'selected' : ''; ?>>Giao hàng thất bại</option>
                                        </select>
                                        <button type="submit" class="btn btn-sm btn-primary">Thay đổi</button>
                                    </form>
                                </td>

                                <td>
                                    <a href="<?= ADMIN_URL . 'donhang-chitiet?invoice_id=' . $item['invoice_id'] ?> " class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
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