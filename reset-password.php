<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Mật Khẩu</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Đặt lại mật khẩu</h1>
    <form action="reset_process.php" method="post">
    <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email" required>
            </div>
        <button type="submit">Gửi Yêu Cầu</button>
    </form>
</body>
</html>