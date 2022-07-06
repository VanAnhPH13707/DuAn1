<?php
function warr_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        // lấy danh sách danh mục
        $sql = "SELECT * FROM warranty";
        // $sql = "select * from product where name_product like '%$keyword%'";
        $warr = exeQuery($sql, true);

        // hiển thị view
        admin_render('warranty/index.php', compact('warr', 'keyword'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function creat_new_warranty()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        admin_render('warranty/creat-new-warranty.php', [], 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function update_warranty()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $warranty_id = $_GET['warranty_id'];
        $sql3 = "SELECT * FROM warranty WHERE warranty_id = '$warranty_id'";
        $detail_warr = exeQuery($sql3, false);
        admin_render('warranty/update-warranty.php', compact('detail_warr'), 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function save_update_warranty()
{
    $warranty_id = $_POST['warranty_id'];
    $name_warranty = $_POST['name_warranty'];
    $price = $_POST['price'];
    $warranty_w = $_POST['warranty_w'];
    $sql6 = "UPDATE warranty
    SET name_warranty = '$name_warranty',
        price = '$price',
        warranty_w = '$warranty_w'
        WHERE warranty_id = '$warranty_id'";
    exeQuery($sql6);
    header("location: " . ADMIN_URL . 'warranty?msg=Cập nhật thành công');
}
function save_creat_new_warranty()
{
    $name_warranty = $_POST['name_warranty'];
    $price = $_POST['price'];
    $warranty_w = $_POST['warranty_w'];

    // var_dump($image_product);
    // die;
    $errors = "";
    $warranty = "SELECT * FROM warranty WHERE name_warranty = '$name_warranty'";
    $l = exeQuery($warranty, false);
    if (strcasecmp($l['name_warranty'], $name_warranty) == 0) {
        $errors .= "name_warranty-err=Gói bảo hành đã tồn tại&";
    }
    if (empty($name_warranty)) {
        $errors .= "name_warranty-err=Không được bỏ trống&";
    }

    if (empty($price)) {
        $errors .= "price-err=Không được bỏ trống&";
    }
    if (empty($warranty_w)) {
        $errors .= "warranty_w-err=Không được bỏ trống&";
    }
    if (strlen($errors) > 0) {
        header("location:" . ADMIN_URL . 'warranty/creat-new-warranty?' . $errors);
        die;
    }
    $sql01 = "INSERT INTO warranty (name_warranty, price, warranty_w)
                        values('$name_warranty', '$price','$warranty_w')";
    exeQuery($sql01, false);
    header("location: " . ADMIN_URL . 'warranty');
}
function del_warranty()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $warranty_id = $_GET['warranty_id'];
        $sql3 = "DELETE FROM warranty WHERE warranty_id = '$warranty_id'";
        exeQuery($sql3);
        header("location:" . ADMIN_URL . 'warranty?msg=Xóa thành công');
    } else {
        header("location: " . BASE_URL);
    }
}
