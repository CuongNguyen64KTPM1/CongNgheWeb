<?php
// Kiểm tra nếu form đã được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Thư mục lưu ảnh
    $target_dir = "upload/"; // Đảm bảo rằng thư mục này đã tồn tại và có quyền ghi
    // Đường dẫn lưu ảnh
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //var_dump($target_file);
    $uploadOk = 1;
    // Lấy loại file
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    echo $imageFileType;
    // Kiểm tra file có phải là ảnh không
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File là ảnh - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File không phải là ảnh.<br>";
        $uploadOk = 0;
    }

    // Kiểm tra file đã tồn tại
    if (file_exists($target_file)) {
        echo "File đã tồn tại.<br>";
        $uploadOk = 0;
    }

    // Giới hạn dung lượng file (5MB)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Dung lượng file quá lớn.<br>";
        $uploadOk = 0;
    }

    // Giới hạn loại file
    if (
        $imageFileType != "jpg" && $imageFileType != "jpeg" &&
        $imageFileType != "png" && $imageFileType != "gif"
    ) {
        echo "Chỉ chấp nhận file JPG, JPEG, PNG & GIF.<br>";
        $uploadOk = 0;
    }

    // Kiểm tra xem file có hợp lệ không
    if ($uploadOk == 0) {
        echo "File không được tải lên.<br>";
    } else {
        // Kiểm tra và tạo thư mục upload nếu chưa có
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true); // Tạo thư mục với quyền ghi
        }

        // Di chuyển file vào thư mục
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được tải lên.<br>";
            echo "<br><img src='$target_file' alt='Hình ảnh đã tải lên' style='max-width: 300px; max-height: 300px;'><br>";
        } else {
            echo "Đã xảy ra lỗi khi tải lên file.<br>";
        }
    }
}
?>
