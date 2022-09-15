<?php

session_start();
ob_start();
include "./connectDatabase/conDatabase.php";


if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM  users WHERE email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        header('Location: main.php');
    } else {
        echo 'Sai mk!';
    }
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Đăng nhập</title>
</head>

<body>

    <div class="app__login">

        <div class="login__container">

            <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="login__container__account">
                    <h4>Tài khoản</h4>
                    <input type="email" name="email">
                </div>

                <div class="login__container__password">
                    <h4>Mật khẩu</h4>
                    <input type="password" name="pass">
                </div>

                <div class="login__container__dk">
                    <a href="#">Đăng ký tài khoản!</a>
                </div>

                <input class="btnDangNhap" type="submit" name="dangnhap" value="LOG IN">

            </form>

        </div>

    </div>

</body>

</html>