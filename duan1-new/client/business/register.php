<?php
function register()
{
    if (isset($_POST['register'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $repass = $_POST['repass'];
        $errors = "";
        $sql1 = "SELECT * FROM user WHERE email = '$email'";
        $a = exeQuery($sql1, false);
        if (strcasecmp($a['email'], $email) == 0) {
            $errors .= "email-err=Tài khoản đã tồn tại&";
        }
        if (empty($email)) {
            $errors .= "email-err=Hãy nhập email&";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors .= "email-err=Email không hợp lệ&";
            }
        }
        if (empty($fullname)) {
            $errors .= "fullname-err=Hãy nhập tên&";
        }
        if ($repass != $pass) {
            $errors .= "repass-err=Mật khẩu không khớp&";
        }
        if (strlen($pass) < 6) {
            $errors .= "password-err=Mật khẩu phải có ít nhất 6 kí tự&";
        }

        $errors = rtrim($errors, '&');
        if (strlen($errors) > 0) {
            header('location: register?' . $errors);
            die;
        }
        $password = md5($_POST['password']);

        // thêm tài khoản
        $sql = "insert into user(fullname, email, password, address, contract_number, role) values('$fullname', '$email', '$password', '', '', '')";
        exeQuery($sql, false);
        header('location: register?msg=Đăng kí thành công');
    }
    client_render('register/index.php');
}
