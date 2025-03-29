<?php
session_start();
$errors = [];

$users = [
    "test@example.com" => "password123"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = trim($_POST["password"]);

    if (empty($email)) {
        $errors["email"] = "Vui lòng nhập email.";
    }

    if (empty($password)) {
        $errors["password"] = "Vui lòng nhập mật khẩu.";
    }

   
    if (empty($errors)) {
        if (isset($users[$email]) && $users[$email] === $password) {
            $_SESSION["user"] = $email;
            header("Location: welcome.php"); 
            exit();
        } else {
            $errors["login"] = "Email hoặc mật khẩu không đúng.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Đăng Ký</h1>
        <form action="dashboard.php" method="post">
            <div class="input-group">
                <label for="name">Họ và Tên</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ tên" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Xác nhận mật khẩu</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Xác nhận mật khẩu" required>
            </div>
            <button type="submit">Đăng Ký</button>
        </form>
        <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
        <p><a href="reset-password.php">Quên mật khẩu?</a></p>
    </div>
</body>
</html>
