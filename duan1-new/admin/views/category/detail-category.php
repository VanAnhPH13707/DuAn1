<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Chi tiết danh mục</h3>
            </div>
            <div class="card-body">
                <br>
                <div class="col-10 offset-1" style="border: 3px solid #FF9966; border-radius: 20px; padding:20px;">
                    <label for="">Tên danh mục: </label>
                    <span><?= $pro['name_category'] ?></span>
                </div>
            </div>
            <div class="card-header">
                <h3 class="card-title">Danh mục con</h3>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped" style="text-align: center;">
                    <thead>
                        <th>STT</th>
                        <th>Tên danh mục con</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'category/creat-new-subcategory?category_id=' . $_GET['category_id'] ?>" class="btn btn-sm btn-success">Thêm mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($subc as $index => $i) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $i['name_subcategory'] ?></td>
                                <td>
                                    <a name="update-subcategory" href="<?= ADMIN_URL . 'category/update-subcategory?subcategory_id=' . $i['subcategory_id'] . '&category_id=' . $i['category_id'] ?> " class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php if ($_SESSION['email']['role'] == 2) {
                                        echo "<a href='javascript:;' onclick='confirm_remove(" . '"' . ADMIN_URL . "category/del-subcategory?subcategory_id=" . $i['subcategory_id'] . "&category_id=" . $_GET["category_id"] . '"' . "," . '"' . $i['name_subcategory'] . '"' . ")' class='btn btn-sm btn-danger'>
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