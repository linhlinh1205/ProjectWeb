<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ten_cua_database";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý dữ liệu và thực hiện các thao tác lưu vào cơ sở dữ liệu
// Ví dụ: Insert dữ liệu từ form vào bảng
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_to_insert = $_POST["data"]; // Dữ liệu từ form

    $sql = "INSERT INTO ten_bang (ten_cot) VALUES ('$data_to_insert')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>
