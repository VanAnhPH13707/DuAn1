<?php
function banner_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $sql = "SELECT * FROM banner";
        $bn = exeQuery($sql, true);
        admin_render('banner/index.php', compact('bn'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function creat_new_banner()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        admin_render('banner/creat-new-banner.php', [], 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}

function save_creat_new_banner()
{
    $link = $_POST['link'];
    $image_banner = $_FILES['image_banner'];
    $errors = "";
    if (empty($link)) {
        $errors .= "link-err=Không được bỏ trống&";
    }
    if ($image_banner['size'] <= 0) {
        $errors .= "image_banner-err=Phải Upload ảnh&";
    }
    if (strlen($errors) > 0) {
        header("location:" . ADMIN_URL . 'banner/creat-new-banner?' . $errors);
        die;
    }
    if ($image_banner['size'] > 0) {
        $filename = uniqid() . '-' . $image_banner['name'];
        move_uploaded_file($image_banner['tmp_name'], './public/uploads/' . $filename);
        $filename = $filename;
    }
    $sql012 = "INSERT INTO banner (image_banner,link)
                    values('$filename', '$link')";
    exeQuery($sql012);
    header("location:" . ADMIN_URL . 'banner?msg=Thêm mới thành công');
}
function update_banner()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $banner_id = $_GET['banner_id'];
        $sql = "SELECT * FROM banner WHERE banner_id = '$banner_id'";
        $upbanner = exeQuery($sql, false);
        admin_render('banner/update-banner.php', compact('upbanner'), 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function save_update_banner()
{
    $banner_id = $_POST['banner_id'];
    $image_banner = $_FILES['image_banner'];
    $link = $_POST['link'];
    if ($image_banner['size'] > 0) {
        $filename = uniqid() . '-' . $image_banner['name'];
        move_uploaded_file($image_banner['tmp_name'], './public/uploads/' . $filename);
        $filename = $filename;
        $sql8 = " UPDATE banner
                        SET image_banner = '$filename',
                            link = '$link'
                        WHERE banner_id= '$banner_id'";
        exeQuery($sql8);
        header("location:" . ADMIN_URL . 'banner?msg=Cập nhật thành công');
    } else {
        $sql9 = " UPDATE banner
                        SET link = '$link'
                        WHERE banner_id= '$banner_id'";
        exeQuery($sql9);
        header("location:" . ADMIN_URL . 'banner?msg=Cập nhật thành công');
    }
}
function del_banner()
{
    $banner_id = $_GET['banner_id'];
    $sql3 = "DELETE FROM banner WHERE banner_id = '$banner_id'";
    exeQuery($sql3);
    header("location:" . ADMIN_URL . 'banner?msg=Xóa thành công');
}
