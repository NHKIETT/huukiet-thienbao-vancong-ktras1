<?php 
$products = [
    ['id' => 1, 'name' => 'Bún Bò Huế', 'price' => '40.000 VND'],
    ['id' => 2, 'name' => 'Bún Chả Hà Nội', 'price' => '50.000 VND'],
    ['id' => 3, 'name' => 'Phở Hà Nội', 'price' => '200.000 VND'],
    ['id' => 4, 'name' => 'Cơm Tấm Sài Gòn', 'price' => '30.000 VND']
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" type="text/css" href="styleee.css">
</head>
<body>
    <header>
        <img src="aa.png" alt="Logo" style="width:75px; height:62px;">
        <nav>
            <a href="index.php">Trang Chủ</a>
            <a href="products index.php">Sản phẩm</a>
            <a href="contact.php">Liên Hệ</a>
            <a href="login.php">Đăng Xuất</a>
        </nav>
    </header>
    <div class="container">
        <h1>Danh Sách Sản Phẩm</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Hành Động</th>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $product['id']; ?>" class="edit">Sửa</a>
                    <a href="delete.php?id=<?php echo $product['id']; ?>" class="delete">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="products create.php" class="add-btn">Thêm Sản Phẩm</a>
    </div>
    <footer>
        <p>© 2025 - Bản quyền thuộc về LOCALFOOD</p>
    </footer>
</body>
</html>