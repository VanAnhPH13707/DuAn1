<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Chi tiết đơn hàng</h3>
            </div>
            <div class="card-body">
                <br>
                <div class="col-10 offset-1" style="border: 3px solid #FF9966; border-radius: 20px; padding:20px;">

                    <div class="form-group">
                        <label for="">Tên khách hàng: </label>
                        <span><?= $b['fullname'] ?> | </span>
                        <label for="">SDT: </label>
                        <span><?php
                                if ($b['contract_number'] > 0) {
                                    echo "0" . $b['contract_number'];
                                } else {
                                    echo "";
                                }
                                ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ: </label>
                        <span><?= $b['address'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Email: </label>
                        <span><?= $b['email'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Tổng giá hóa đơn: </label>
                        <span><?= number_format($b['total_price']) ?> đồng</span>
                    </div>
                    <div class="form-group">
                        <label for="">Thời gian tạo : </label>
                        <span><?= $b['create_at'] ?> </span>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Bảo hành</th>
                        <th>Số lượng</th>
                        <th>Giá (đồng)</th>

                    </thead>
                    <tbody>
                        <?php foreach ($a as $index => $i) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $i['name_product'] ?></td>
                                <td><?= $i['name_color'] ?></td>
                                <td><?= $i['name_warranty'] ?></td>
                                <td><?= $i['quantity'] ?></td>
                                <td><?= number_format($i['unit_price']) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>