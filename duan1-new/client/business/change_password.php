<?php
function change_password()
{
    if (isset($_SESSION['email'])) {
        if (isset($_POST['change_password'])) {
            $user_id = $_SESSION['email']['user_id'];
            $oldpass = md5($_POST['old_pass']);
            $pass = $_POST['login_pass'];
            $repass = $_POST['re_enter_pass'];
            $sql2 = "SELECT * FROM user WHERE user_id = '$user_id'";
            $s = exeQuery($sql2,false);
            $password = $s['password'];
            $errors = "";
            if ($password != $oldpass) {
                $errors .= "old_pass-err=Mật khẩu cũ không đúng&";
            }
            if ($repass != $pass) {
                $errors .= "repass-err=Mật khẩu không khớp&";
            }
            if (strlen($pass) < 6) {
                $errors .= "login_pass-err=Mật khẩu phải có ít nhất 6 kí tự&";
            }
            $errors = rtrim($errors, '&');
            if (strlen($errors) > 0) {
                header('location: user_profile?' . $errors);
                die;
            }
            $pass_new = md5($pass);
            $sql9 = "UPDATE user SET password = '$pass_new' WHERE user_id = '$user_id'";
            exeQuery($sql9);
            header('location: user_profile?msg=Đổi mật khẩu thành công');
        }
    } else {
        header('location: home');
    }
    client_render('user_profile/index.php', compact('s'));
}
