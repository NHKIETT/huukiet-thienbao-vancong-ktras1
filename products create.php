<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #f8fcff, #e6f0fa);
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h1 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4338ca;
        }
        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #4f46e5;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm Sản Phẩm Mới</h1>
        <form action="create_process.php" method="post">
            <input type="text" name="name" placeholder="Nhập tên sản phẩm" required>
            <input type="number" name="price" placeholder="Nhập giá sản phẩm" required>
            <textarea name="description" placeholder="Nhập mô tả sản phẩm" required></textarea>
            <button type="submit">Thêm Sản Phẩm</button>
        </form>
        <a href="products index.php">Quay lại danh sách sản phẩm</a>
    </div>
</body>
</html>
