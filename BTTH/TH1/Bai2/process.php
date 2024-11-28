<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Kết quả</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Kết quả bài thi</h1>
        <?php
        $filename = "questions.txt";
        $questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


        $answers = [];
        foreach ($questions as $line) {
            if (strpos($line, "Đáp án:") !== false) {
                $answers[] = trim(substr($line, strpos($line, ":") + 1));
            }
        }


        $score = 0;
        foreach ($_POST as $key => $userAnswer) {

            $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);


            if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
                $score++;
            }
        }


        echo "<div class='alert alert-success text-center'>";
        echo "Bạn đã trả lời đúng <strong>$score</strong>/" . count($answers) . " câu.";
        echo "</div>";
        ?>
        <div class="text-center mt-4">
            <a href="t.php" class="btn btn-primary">Làm lại</a>
        </div>
    </div>
</body>
</html>
