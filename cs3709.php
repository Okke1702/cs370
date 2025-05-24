<?php
    include "./database/database.php";
// Kiểm tra nếu dữ liệu được gửi qua phương thức POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và xử lý để tránh lỗi bảo mật (XSS)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Chuẩn bị truy vấn SQL để lưu dữ liệu
    $sql = "INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)";

    // Sử dụng prepared statements để tránh SQL injection
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Liên kết các tham số và thực thi truy vấn
    $stmt->bind_param("sss", $name, $email, $message); 

    // Kiểm tra việc thực thi truy vấn
    if ($stmt->execute()) {
        http_response_code(200); // Trả về mã HTTP 200 nếu thành công
        echo "Feedback submitted successfully!";
    } else {
        http_response_code(500); // Trả về mã HTTP 500 nếu có lỗi
        echo "Error: " . $stmt->error;
    }

    // Đóng câu lệnh và kết nối
    $stmt->close();
}


?>