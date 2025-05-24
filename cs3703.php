<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>


        /* Định dạng cơ bản cho toàn bộ trang */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
    margin: 0;
    padding: 0;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Định dạng cho khung chứa biểu mẫu */
.container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px;
    animation: fadeIn 1s ease-in-out;
}

/* Hiệu ứng fade-in nhẹ nhàng */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Tiêu đề */
h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 24px;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Định dạng cho nhãn (label) */
label {
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 6px;
    display: block;
    color: #34495e;
}

/* Định dạng cho các trường nhập liệu */
input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    background-color: #f9f9f9;
    color: #2c3e50;
    transition: border-color 0.3s ease;
}

/* Hiệu ứng khi người dùng chọn vào trường nhập liệu */
input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
    border-color: #3498db;
    background-color: #ecf6fc;
    outline: none;
}

/* Định dạng cho nút gửi */
button {
    width: 100%;
    padding: 12px;
    background-color: #3498db;
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s;
}

/* Hiệu ứng khi di chuột qua nút */
button:hover {
    background-color: #2980b9;
    transform: translateY(-2px);
}

/* Định dạng cho thông báo phản hồi */
.feedback-message {
    display: none;
    margin-top: 20px;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
}

/* Thông báo thành công */
.success {
    background-color: #2ecc71;
    color: white;
    border: 1px solid #27ae60;
}

/* Thông báo lỗi */
.error {
    background-color: #e74c3c;
    color: white;
    border: 1px solid #c0392b;
}
    </style>
</head>
<body>
<div class = "container1">
    <div class = "header">
        <?php 
            include "header.php";
        ?>
    </div>
    <div class="container">

        <h1>Feedback</h1>
        <form id="feedbackForm">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Your Feedback:</label>
            <textarea id="message" name="message" rows="5" placeholder="Enter your feedback" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>

        <!-- Phần hiển thị thông báo phản hồi -->
        <div id="feedbackMessage" class="feedback-message"></div>
    </div>
</div>


<script>
    // Xử lý sự kiện submit của form feedback
    document.getElementById('feedbackForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn việc reload trang khi form được submit

        // Lấy thông tin người dùng nhập
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Thông báo trạng thái gửi phản hồi
        const feedbackMessage = document.getElementById('feedbackMessage');

        // Gửi phản hồi qua AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'submit_feedback.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                feedbackMessage.textContent = 'Thank you for your feedback!';
                feedbackMessage.classList.add('success');
                feedbackMessage.classList.remove('error');
                feedbackMessage.style.display = 'block';
            } else if (xhr.readyState === 4) {
                feedbackMessage.textContent = 'There was an error submitting your feedback. Please try again.';
                feedbackMessage.classList.add('error');
                feedbackMessage.classList.remove('success');
                feedbackMessage.style.display = 'block';
            }
        };
        xhr.send(`name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`);

        // Xóa các trường nhập liệu sau khi submit
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('message').value = '';
    });
</script>
<?php
    include "footer.php";
?>
</body>
</html>