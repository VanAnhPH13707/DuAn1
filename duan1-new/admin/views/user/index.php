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
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th style="width: 20%;">Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Vai trò</th>
                        <th>Trạng thái</th>
                        <?php
                        if ($_SESSION['email']['role'] == 2) {
                            echo "<th>
                            <a href='" . ADMIN_URL . "user/creat-new-user-admin' class='btn btn-sm btn-success'>Tạo tài khoản nhân viên</a>
                        </th>";
                        } else {
                            echo "";
                        }
                        ?>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($user_index as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['fullname'] ?> <br> <?php if($item['user_id'] == $_SESSION['email']['user_id']){echo "<p style='font-size:10px; color: #17A2B8'>(Tài khoản của bạn)</p>";}?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['address'] ?></td>
                                <td><?php
                                    if ($item['contract_number'] > 0) {
                                        echo "0" . $item['contract_number'];
                                    } else {
                                        echo "";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($item['role'] == 2) {
                                        echo "Admin";
                                    } elseif ($item['role'] == 1) {
                                        echo "Nhân viên";
                                    } else {
                                        echo "Khách hàng";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($item['status'] == 1) {
                                        echo "Lock";
                                    } else {
                                        echo "Unlock";
                                    }
                                    ?></td>
                                <?php
                                if ($_SESSION['email']['role'] == 2) {
                                    echo "<td>";
                                    if ($item['role'] == 1  || $_SESSION['email']['user_id'] == $item['user_id']) {
                                        echo "<a style='width:30.25px; margin-right: 4px;' name='update-user' href='" . ADMIN_URL . "user/update-user?user_id=" . $item['user_id'] . '&role=' . $item['role'] . "' class='btn btn-sm btn-info'>
                                        <i class='fas fa-edit'></i>
                                    </a>";
                                    }
                                    echo "<a href='javascript:;' onclick='confirm_lock(" . '"' . ADMIN_URL . "user/lock-user?user_id=" . $item['user_id'] . "&status=" . $item['status'] . "&role=". $item['role'] .'"' . "," . '"' . $item['email'] . '"' . ")' class='btn btn-sm btn-danger'>
                                    <i class='fas fa-lock'></i>
                                    </a>";
                                    echo "</td>";
                                }

                                ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>