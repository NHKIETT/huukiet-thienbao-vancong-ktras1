<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f5ff;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .header {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 50px;
        }
        .header h1 {
            font-size: 20px;
            margin: 0;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .container {
            margin: 50px auto;
            max-width: 800px;
        }
        .dashboard {
            display: flex;
            justify-content: space-around;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
        }
        .card h2 {
            color: #555;
        }
        .card p {
            font-size: 24px;
            font-weight: bold;
            color: #4a90e2;
        }
        .btn {
            display: inline-block;
            background: #4a90e2;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3><img src="aa.png" alt="Logo" style="float:left; width:80px; height:75px;"></h3>
        <div class="nav">
            <a href="index.php">Trang Chủ</a>
            <a href="products index.php">Sản phẩm</a>
            <a href="contact.php">Liên Hệ</a>
            <a href="login.php">Đăng Nhập</a>
        </div>
    </div>
    
    <div class="container">
        <h1>Tổng Quan</h1>
        <div class="dashboard">
            <div class="card">
                <h2>Số Sản Phẩm</h2>
                <p>100</p>
            </div>
            <div class="card">
                <h2>Người Dùng</h2>
                <p>50</p>
            </div>
            <div class="card">
                <h2>Đơn Hàng</h2>
                <p>150</p>
            </div>
        </div>
        <a href="products index.php" class="btn">Quản Lý Sản Phẩm</a>
    </div>
    
    <footer style="margin-top: 50px; padding: 20px; background: #fff; box-shadow: 0 -2px 4px rgba(0,0,0,0.1);">
        &copy; 2025 - Bản quyền thuộc về Lotus
    </footer>
</body>
</html>
