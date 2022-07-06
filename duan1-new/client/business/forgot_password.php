<?php
require_once './dao/pdo.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function check_mail()
{
    ob_start();
    if (isset($_POST['checkmail'])) {
        $email = $_POST['email'];
        $errors = "";
        $sql1 = "SELECT * FROM user WHERE email = '$email'";
        $a = exeQuery($sql1, false);
        if (strcasecmp($a['email'], $email) != 0) {
            $errors .= "email-err=Email không tồn tại&";
        }
        if (empty($email)) {
            $errors .= "email-err=Hãy nhập email&";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors .= "email-err=Email không hợp lệ&";
            }
        }
        $errors = rtrim($errors, '&');
        if (strlen($errors) > 0) {
            header('location: checkmail?' . $errors);
            die;
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $m_time = date('Y-m-d H:i:sa', time());
        $m_token = MD5(RAND(0, 9999));
        $sql9 = "UPDATE user SET m_token = '$m_token', m_time = '$m_time' WHERE email = '$email'";
        exeQuery($sql9);
        // $recciever = "sodeep.no1@gmail.com";
        $title = "Quên mật khẩu";
        $link_change = BASE_URL . "forgot_password?m_token=" . $m_token;
        $content = "<a href='" . $link_change . "'>Bấm vào đây</a> để đổi mật khẩu (Đường link sẽ bị hết hạn sau 30 phút). <br>Vui lòng không chia sẻ tin nhắn này cho bất kì ai!";
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'huyvt.work@gmail.com';                     //SMTP username
            $mail->Password   = 'changlaai1';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('huyvt.work@gmail.com', 'Hi-Store');

            $mail->addAddress($email);               //Name is optional
            $mail->addReplyTo('huyvt.work@gmail.com', 'Hi-Store');
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $title;
            $mail->Body    = $content;
            $mail->AltBody = $content;
            $mail->send();
            header('Location:' . BASE_URL . 'checkmail?msg= Gửi mail thành công, vui lòng kiểm tra!');
        } catch (Exception $e) {
            header('Location: checkmail?msg= Gửi mail thất bại, vui lòng thử lại!');
        }
    }
    client_render('forgot_password/index.php');
    ob_end_flush();
}
function forgot_pass()
{
    if ($_GET['m_token'] == '') {
        header('Location: home');
    }
    client_render('forgot_password/forgot.php');
}
function save_forgot_pass()
{
    $m_token = $_POST['m_token'];
    $pass = $_POST['password'];
    $repass = $_POST['repass'];
    $errors = "";
    if ($repass != $pass) {
        $errors .= "repass-err=Mật khẩu không khớp&";
    }
    if (strlen($pass) < 6) {
        $errors .= "password-err=Mật khẩu phải có ít nhất 6 kí tự&";
    }

    $errors = rtrim($errors, '&');
    if (strlen($errors) > 0) {
        header('location: forgot_password?m_token=' . $m_token . '&' . $errors);
        die;
    }
    $get_user = "SELECT * FROM user WHERE m_token = '$m_token'";
    $ge = exeQuery($get_user, false);

    $o_time = $ge['m_time'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $n_time = date('Y-m-d H:i:s', time());
    $a = strtotime($n_time) - strtotime($o_time);
    // $date = date('Y-m-d H:i:sa', $a);'
    // var_dump($a);
    // die();
    if ($a > 1800) {
        header('Location:' . BASE_URL . 'checkmail?msg= Token đã hết hạn, vui lòng gửi lại mail!');
    }else {
        $password = md5($_POST['password']);
        $insert_pass = "UPDATE user SET password = '$password' WHERE m_token = '$m_token'";
        exeQuery($insert_pass);
        header('Location:' . BASE_URL . 'login?msg= Đổi mật khẩu thành công!');
    }
}
