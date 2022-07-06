<?php
function profile(){
    $id = $_SESSION['email']['user_id'];
    $sql2 = "SELECT * FROM user WHERE user_id = '$id'";
    $s = exeQuery($sql2,false);
    if (isset($_POST['user_profile'])) {
        $fullname = $_POST['fullname'];
        $contract_number = $_POST['contract_number'];
        $address = $_POST['address'];
        $user_id = $_POST['user_id'];

        // update thông tin tài khoản
        $sql="UPDATE user SET fullname = '$fullname', contract_number = '$contract_number', address = '$address' WHERE user_id = '$user_id'";
        exeQuery($sql);
        header('Location: user_profile?msg=Cập nhật thành công');
    }
    client_render('user_profile/index.php', compact('s'));
}
