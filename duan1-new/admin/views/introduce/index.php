
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>Ảnh</th>
                        <th>Nội dung</th>
                        <th>Hành động</th>
                    </thead>
                    <tbody>
                        <?php foreach ($introduce as $index => $item) : ?>
                            <tr style="justify-content: center;">
                                <td><img style="width:120px; heigh:100px" src="<?= ADMIN . $item['image_introduce'] ?>" alt=""></td>
                                <td><?= $item['content'] ?></td>
                                <td>
                                    <a name="update-introduce" href="<?= ADMIN_URL . 'introduce/update-introduce?introduce_id=' . $item['introduce_id'] ?> " class="btn btn-sm btn-info">
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