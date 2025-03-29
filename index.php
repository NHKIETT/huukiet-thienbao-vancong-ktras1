<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="aa.png" alt="Logo" style="width:85px; height:80px;">
        <nav>
            <ul>
                <li><a href="#">Trang Chủ</a></li>
                <li><a href="products update.php">Sản phẩm</a></li>
                <li><a href="contact.php">Liên hệ</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Chào Mừng Đến Với LOTUS</h1>
        <p>Đây là nơi bạn có thể khám phá các dịch vụ tuyệt vời của chúng tôi. Hãy đăng ký hoặc đăng nhập để trải nghiệm ngay hôm nay!</p>
        <div class="buttons">
            <a href="register.php" class="btn-primary">Đăng Ký</a>
            <a href="login.php" class="btn-secondary">Đăng Nhập</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 - Bản quyền thuộc về Lotus</p>
    </footer>
</body>
</html>
