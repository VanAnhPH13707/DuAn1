<?php
function introduce_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $sql = "SELECT * FROM introduce";
        $introduce = exeQuery($sql, true);
        admin_render('introduce/index.php', compact('introduce'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function update_introduce()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $introduce_id = $_GET['introduce_id'];
        $sql3 = "SELECT * FROM introduce WHERE introduce_id = '$introduce_id'";
        $detail_introduce = exeQuery($sql3, false);
        admin_render('introduce/update-introduce.php', compact('detail_introduce'), 'admin-assets/ckeditor/ckeditor.js');
    } else {
        header("location: " . BASE_URL);
    }
}

function save_update_introduce()
{
    $introduce_id = $_POST['introduce_id'];
    $image_introduce = $_FILES['image_introduce'];
    $content = $_POST['content'];

    if ($image_introduce['size'] > 0) {
        $filename = uniqid() . '-' . $image_introduce['name'];
        move_uploaded_file($image_introduce['tmp_name'], './public/uploads/' . $filename);
        $filename = $filename;
        $sql5 = "UPDATE introduce 
        SET image_introduce = '$filename',
            content = '$content'
            WHERE introduce_id = '$introduce_id'";
        exeQuery($sql5);
        header("location: " . ADMIN_URL . 'introduce?msg=Cập nhật thành công');
    } else {
        $sql5 = "UPDATE introduce 
        SET content = '$content'
            WHERE introduce_id = '$introduce_id'";
        exeQuery($sql5);
        header("location: " . ADMIN_URL . 'introduce?msg=Cập nhật thành công');
    }
}
