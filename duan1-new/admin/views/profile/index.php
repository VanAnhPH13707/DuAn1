<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>Tên công ty</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Bản đồ</th>
                        <th>Hành động</th>
                    </thead>
                    <tbody>
                        <?php foreach ($pro as $index => $item) : ?>
                            <tr style="justify-content: center;">
                                <td><?= $item['name_company'] ?></td>
                                <td><?php
                                    if ($item['tel'] > 0) {
                                        echo "0" . $item['tel'];
                                    } else {
                                        echo "";
                                    }
                                    ?></td>
                                <td><?= $item['address_company'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['map'] ?></td>
                                <td>
                                    <a name="update-product" href="<?= ADMIN_URL . 'profile/update-profile?profile_id=' . $item['profile_id'] ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
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