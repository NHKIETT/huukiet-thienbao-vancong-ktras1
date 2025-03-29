<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Liên Hệ</title>
</head>
<link rel="stylesheet" type="text/css" href="stylee.css">
<body>
<div class="container">
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <form>
            <div class="input-group">
                <label for="name">Họ và Tên</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ tên" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email" required>
            </div>
            <div class="input-group">
                <label for="subject">Chủ Đề</label>
                <input type="text" id="subject" name="subject" placeholder="Nhập chủ đề" required>
            </div>
            <div class="input-group">
                <label for="message">Nội Dung</label>
                <textarea id="message" name="message" placeholder="Nhập nội dung tin nhắn" required></textarea>
            </div>
            <button type="submit">Gửi Tin Nhắn</button>
        </form>
    </div>
   
</body>
</html> 