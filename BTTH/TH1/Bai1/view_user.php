<?php
include 'list.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.5.2-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/css/bai_5_2.css">
    <title>Danh sách các loài hoa</title>
</head>
<style>
    /* Đặt toàn bộ nội dung vào giữa màn hình */
/* Đặt toàn bộ nội dung vào giữa màn hình */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f9f9f9;
}

/* Bọc nội dung trong container */
.container {
    text-align: center;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px; /* Giới hạn chiều rộng */
    width: 90%;
}

/* Tiêu đề */
h1 {
    margin-bottom: 20px;
    color: #333;
}

/* Danh sách các loài hoa - hiển thị dạng cột */
.flower-list {
    display: flex;
    flex-direction: column; /* Hiển thị danh sách theo chiều dọc */
    gap: 20px; /* Khoảng cách giữa các mục */
    align-items: center; /* Căn giữa các mục */
}

/* Mỗi loài hoa */
.flower-item {
    background: #fafafa;
    padding: 15px;
    border-radius: 8px;
    width: 100%; /* Chiều rộng bằng container */
    max-width: 500px; /* Giới hạn chiều rộng từng mục */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s, box-shadow 0.2s;
    text-align: left;
}

.flower-item:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Hình ảnh */
.flower-image {
    width: 100%; /* Chiều rộng đầy đủ */
    height: auto; /* Tự động điều chỉnh chiều cao */
    border-radius: 8px;
    object-fit: cover;
    margin-bottom: 10px;
}

/* Tên và mô tả */
.flower-item h2 {
    font-size: 20px;
    margin: 10px 0;
    color: #555;
}

.flower-item p {
    font-size: 14px;
    color: #777;
    line-height: 1.5;
}

</style>
<body>
    <div class="container">
        <h1>Danh sách các loài hoa</h1>
        <div class="flower-list">
            <?php foreach ($_SESSION['flowers'] as $flower): ?>
                <div class="flower-item">
                    <img src="<?= $flower['image']?>" alt="<?= $flower['name'] ?>" class="flower-image">
                    <h2><?= $flower['name'] ?></h2>
                    <p><?= $flower['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
