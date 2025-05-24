<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
}
    </style>
</head>
<body>
<footer>
        <div id="scrollingText">
            <span id="dateTime"></span> | <span id="location"></span>
        </div>
    </footer>

</html>
<script>
    // Hiển thị thời gian thực
function updateDateTime() {
    const now = new Date();
    const dateTimeString = now.toLocaleString();
    document.getElementById('dateTime').textContent = dateTimeString;
}
setInterval(updateDateTime, 1000);

// Lấy vị trí hiện tại với HTML5 Geolocation
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
        const { latitude, longitude } = position.coords;
        document.getElementById('location').textContent = `Lat: ${latitude.toFixed(2)}, Long: ${longitude.toFixed(2)}`;
    });
} else {
    document.getElementById('location').textContent = 'Geolocation is not supported by this browser.';
}
</script>