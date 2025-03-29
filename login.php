<?php
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = trim($_POST["password"]);
    $repeat_password = trim($_POST["repeat-password"]);


    if (empty($username)) {
        $errors["username"] = "Vui lòng nhập họ tên.";
    }

    if (empty($email)) {
        $errors["email"] = "Vui lòng nhập email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email không hợp lệ.";
    }


    if (empty($password)) {
        $errors["password"] = "Vui lòng nhập mật khẩu.";
    } elseif (strlen($password) < 6) {
        $errors["password"] = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

  
    if (empty($repeat_password)) {
        $errors["repeat-password"] = "Vui lòng xác nhận mật khẩu.";
    } elseif ($password !== $repeat_password) {
        $errors["repeat-password"] = "Xác nhận mật khẩu không khớp.";
    }

    
    if (empty($errors)) {
        $success = "Đăng ký thành công! Chào mừng, $username!";
        $_POST = []; 
    }
    if (empty($errors)){
        $username = $email = $password = $repeat_password ="";
        header('location:/login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Đăng Nhập</h1>
        <form action="dashboard.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
            
            <button type="submit">Đăng Nhập</button>

        </form> 
        <p><a href="reset-password.php">Quên mật khẩu?</a></p>
    </div>
</body>
</html>
