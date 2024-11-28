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
    <title>add</title>
</head>

<body>
    <div class="container">
        <h1>THÊM</h1>
        <form action= "view_admin.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="txtTen">Tên</label>
                <input type="text" class="form-control" id="txtTen" name="name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</body>

</html>