<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Đặt Hàng</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Hóa Đơn Đặt Hàng</h1>
        </header>

        <div class="bill">
            <h2>Thông tin đơn hàng</h2>
            <div class="order-details">
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Phí giao hàng</th>
                            <th>Thành tiền</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bún Bò Huế</td>
                            <td>1</td>
                            <td>40.000 VNĐ</td>
                            <td>12.000 VNĐ</td>
                            <td>52.000 VNĐ</td>
                            

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="customer-info">
                <h3>Thông tin khách hàng</h3>
                <p><strong>Họ và tên:</strong> Nguyễn Văn A</p>
                <p><strong>Email:</strong> nguyenvana@example.com</p>
                <p><strong>Địa chỉ:</strong> 123 Đường XYZ, TP.HCM</p>
                <p><strong>Số điện thoại:</strong> 0901234567</p>
            </div>

            <div class="total">
                <p><strong>Tổng tiền:</strong> 40.000 VNĐ</p>
            </div>

            <div class="actions">
                <button onclick="goToPayment()">Thanh toán</button>
                <button onclick="goBack()">Quay lại</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>