<?php
require_once("../connect.php");
require_once("../class.php");

session_start();
$response = array();

if (!empty($_POST['email_login'])) {
    $email = $_POST['email_login'];
} else {
    $response["email_empty"] = "Bạn cần nhập tài khoản";
}

if (!empty($_POST['password_login'])) {
    $password = $_POST['password_login'];
} else {
    $response["password_empty"] = "Bạn cần nhập mật khẩu";
}

if (!empty($email) && !empty($password)) {

    $user = new User();
    $result = $user->login($email, $password);

    if ($result == "Đăng nhập thành công") {
        $response["success_login"] = "Đăng nhập thành công";
    } else if ($result == "Bạn đã nhập sai mật khẩu") {
        $response["wrong_password"] = "Bạn đã nhập sai mật khẩu";
    } else {
        $response["wrong_email"] = "Tài khoản không tồn tại";
    }
}

if (!empty($response)) {
    echo json_encode($response);
}
