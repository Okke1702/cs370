<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/contact_us.css">
    <?php
    include "header.php";
    ?>
     <style>
        
        /*Phần thông tin liên hệ (Contact Info)*/
        .contact-info {
    margin-bottom: 30px;
    text-align: center;
}

        .contact-info h2 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .contact-info p {
            font-size: 18px;
            color: #7f8c8d;
        }

        .contact-info a {
            font-size: 18px;
            color: #2980b9;
            text-decoration: underline;
        }
     

        /*Social Media*/
        .social-media {
            text-align: center;
            margin-top: 20px;
        }

        .social-media a {
            font-size: 18px;
            color: #2980b9;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-media a:hover {
            color: #1abc9c;
        }
        /*So dien thoai va thoi gian lam viec*/
        .contact-info p a {
            font-weight: bold;
            color: #e74c3c;
        }

        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Contact Us</h1>
        
        <!-- Địa chỉ công ty -->
        <div class="contact-info">
            <h2>Our Office</h2>
            <p>Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</p>
            
            <!-- Google Maps Iframe -->
            <iframe 
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20%C4%90.%20%C4%90%E1%BA%A1i%20C%E1%BB%93%20Vi%E1%BB%87t,%20B%C3%A1ch%20Khoa,%20Hai%20B%C3%A0%20Tr%C6%B0ng,%20H%C3%A0%20N%E1%BB%99i+(My%20Business%20Name)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

        <!-- Liên kết Email -->
        <div class="contact-info">
            <h2>Email Us</h2>
            <p>If you have any questions, feel free to send us an email at: 
                <a href="mailto:khanhnh309@gmail.com">khanhnh309@gmail.com</a>
            </p>
        </div>

        <!--So dien thoai lien he -->
        <div class="contact-info">
            <h2>Call Us</h2>
            <p>Phone: <a href="tel:+84987654321">+84 987 654 321</a></p>
        </div>


        <!--Mang xa hoi-->
        <div class="social-media">
            <h2>Follow Us</h2>
            <a href="https://www.facebook.com/bui.q.khanh.52">Facebook</a>
            <a href="https://www.linkedin.com/yourcompany">LinkedIn</a>
            <a href="https://twitter.com/yourcompany">Twitter</a>
        </div>

        <!--Thoi gian lam viec-->
        <div class="contact-info">
            <h2>Working Hours</h2>
            <p>Monday - Friday: 9 AM - 6 PM</p>
            <p>Saturday: 9 AM - 12 PM</p>
            <p>Sunday: Closed</p>
        </div>


      
            

     
    </div>
    <?php
include "footer.php";
?>
</body>
</html>