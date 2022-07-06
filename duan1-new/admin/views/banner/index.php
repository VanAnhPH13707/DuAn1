<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Banner</th>
                        <th>Link</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'banner/creat-new-banner' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($bn as $index => $item) : ?>
                            <tr style="justify-content: center;">
                                <td><?= $index + 1 ?></td>
                                <td><img style="width:120px; heigh:100px" src="<?= ADMIN . $item['image_banner'] ?>" alt=""></td>
                                <td><?= $item['link'] ?></td>
                                <td>
                                    <a name="update-banner" href="<?= ADMIN_URL . 'banner/update-banner?banner_id=' . $item['banner_id']  ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php if ($_SESSION['email']['role'] == 2) {
                                        echo "<a href='javascript:;' onclick='confirm_remove(" . '"' . ADMIN_URL . "banner/del-banner?banner_id=" . $item['banner_id'] .  '"' . "," . '"' . $index+1 . '"' . ")' class='btn btn-sm btn-danger'>
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