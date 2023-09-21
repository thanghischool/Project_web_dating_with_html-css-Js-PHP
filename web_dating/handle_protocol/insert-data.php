<?php
require_once("../connect.php");
require_once("../class.php");

$response = array();

if (empty($_POST['surname'])) {
    $response["surname_empty"] = "Họ của bạn là gì";
}

if (empty($_POST['name'])) {
    $response["name_empty"] = "Tên của bạn là gì";
}

if (!empty($_POST['surname']) && !empty($_POST['name'])) {
    $fullname = $_POST['surname'] . ' ' . $_POST['name'];
}

if (!empty($_POST['email'])) {

    $sql_select_email = "select email from users where email = '" . $_POST['email'] . "'";
    $query = mysqli_query($conn, $sql_select_email);
    if (mysqli_num_rows($query) > 0) {
        $exist_email = "Email đã tồn tại";
        $response["exist_email"] = $exist_email;
    } else {
        $email = $_POST['email'];
    }
} else {
    $response["email_empty"] = "Email của bạn là gì";
}

if (!empty($_POST['password'])) {

    $sql_select_password = "select password from users";
    $query = mysqli_query($conn, $sql_select_password);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if (password_verify($_POST['password'], $row['password'])) {
                $exist_password = "Mật khẩu đã được đặt";
                break;
            }
        }
    }
    if (isset($exist_password)) {
        $response["exist_password"] = $exist_password;
    } else {
        $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    }
} else {
    $response["password_empty"] = "Mật khẩu của bạn là gì";
}





if (!empty($_POST['sex'])) {
    $sex = $_POST['sex'];
} else {
    $response["sex_empty"] = "Giới tính của bạn là gì";
}

if (
    !empty($fullname)  && !empty($email)  && !empty($hashed_password)  &&
    !empty($sex)
) {
    $day = intval($_POST['day']);
    $month = intval($_POST['month']);
    $year = intval($_POST['year']);
    $match = $year . '/' . $month . '/' . $day;
    $birthDate = date_format(date_create($match), "Y/m/d");
    $created_at = date("Y-m-d H:i:s");
    $user = new User();
    $insert_user = $user->sign_up($fullname, $email, $hashed_password, $birthDate, $sex, $created_at);

    if ($insert_user) {
        $response["success_register"] = "Bạn đã đăng ký thành công !";
    }
}
if (!empty($response)) {
    echo json_encode($response);
}
