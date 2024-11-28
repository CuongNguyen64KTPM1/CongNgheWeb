<?php
session_start();

if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteIndex = $_POST['delete_index'] ?? null; // Lấy chỉ số cần xóa nếu có
    $editIndex = $_POST['edit_index'] ?? null; // Lấy chỉ số cần sửa nếu có
    $name = trim($_POST['ten'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $address = trim($_POST['diachi'] ?? '');
    $phone = trim($_POST['sdt'] ?? '');

    if ($deleteIndex !== null && is_numeric($deleteIndex)) {
        $deleteIndex = (int) $deleteIndex;
        if (isset($_SESSION['list'][$deleteIndex])) {
            unset($_SESSION['list'][$deleteIndex]);
            $_SESSION['list'] = array_values($_SESSION['list']);
        }
    } elseif ($editIndex !== null && is_numeric($editIndex)) {
        $editIndex = (int) $editIndex;
        if (isset($_SESSION['list'][$editIndex])) {
            $_SESSION['list'][$editIndex] = [
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'phone' => $phone,
            ];
        }
    } else {
        if ($name && $email && $address && $phone) {
            $_SESSION['list'][] = [
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'phone' => $phone,
            ];
        }
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
$list_table = $_SESSION['list'];
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
    <title>Form_Jquery_Validate</title>

</head>

<body>
    <div class="container">

        <?php require 'header.php'; ?>
        <?php require 'section-one.php'; ?>


        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($list_table as $index => $employee): ?>
                    <tr data-index="<?= $index ?>">
                        <td><?= htmlspecialchars($employee['name']) ?></td>
                        <td><?= htmlspecialchars($employee['email']) ?></td>
                        <td><?= htmlspecialchars($employee['address']) ?></td>
                        <td><?= htmlspecialchars($employee['phone']) ?></td>
                        <td>
                            <button class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myModalEdit">Sửa</button>
                            <form action="" method="POST" style="display: inline-block;">
                                <input type="hidden" name="delete_index" value="<?= $index ?>">
                                <button type="submit" class="btn btn-danger btn-delete">Xóa</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <?php include 'footer.php'; ?>
    <?php require 'modal-edit.php'; ?>
    <?php require 'modal-add.php'; ?>

    <script src="./assets/js/bai_5_2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.3/jquery.validate.min.js"></script>

    <script>
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('btn-edit')) {
                const row = event.target.closest('tr');
                const index = row.getAttribute('data-index'); // Lấy chỉ số của hàng
                const cells = row.querySelectorAll('td'); // Lấy danh sách các cột trong hàng

                const name = cells[0].textContent.trim();
                console.log(index);
                const email = cells[1].textContent.trim();
                const address = cells[2].textContent.trim();
                const phone = cells[3].textContent.trim();


                document.getElementById('txtTen').value = name;
                document.getElementById('txtEmail').value = email;
                document.getElementById('txtDiachi').value = address;
                document.getElementById('txtSDT').value = phone;

                document.getElementById('editIndex').value = index;
            }
        });
    </script>

</body>

</html>