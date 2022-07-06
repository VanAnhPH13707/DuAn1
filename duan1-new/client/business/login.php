<?php
function login()
{
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $errors = "";
        if (empty($email)) {
            $errors .= "email-err=Hãy nhập email&";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors = "email-err=Email không hợp lệ&";
            }
        }
        if (strlen($pass) < 6) {
            $errors .= "password-err=Mật khẩu phải có ít nhất 6 kí tự&";
        }

        $errors = rtrim($errors, '&');
        if (strlen($errors) > 0) {
            header('location: login?' . $errors);
            die;
        }
        $password = md5($_POST['password']);
        $sql = "select*from user where email='" . $email . "' AND password='" . $password . "'";
        $s = exeQuery($sql, false);
        if (is_array($s)) {
            $_SESSION['email'] = $s;
            header('location: home?msg=Đăng nhập thành công');
        } else {
            header('location: login?msg=Tài khoản hoặc mật khẩu không chính xác');
        }
    }
    client_render('login/index.php');
}
function logout()
{
    session_unset();
    header('location: home?msg=Bạn đã đăng xuất');
}
