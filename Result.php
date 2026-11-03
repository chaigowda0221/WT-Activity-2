
<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.html");
    exit();
}

$correctAnswers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$score = 0;
$total = count($correctAnswers);

for ($i = 0; $i < $total; $i++) {

    $key = "q" . $i;

    if (!isset($_POST[$key]) || !is_string($_POST[$key])) {
        die("Please answer all questions. <a href='quiz.php'>Go back</a>");
    }

    $answer = $_POST[$key];

    if (!in_array($answer, ["0", "1", "2", "3"], true)) {
        die("Invalid answer. <a href='quiz.php'>Try again</a>");
    }

    if ((int)$answer == $correctAnswers[$i]) {
        $score++;
    }
}

$percentage = ($score / $total) * 100;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container result">

    <h1>Quiz Result</h1>

    <h2>Your Score: <?php echo $score; ?> / <?php echo $total; ?></h2>

    <h3>Percentage: <?php echo $percentage; ?>%</h3>

    <?php
    if ($score >= 8) {
        echo "<p>Excellent Performance!</p>";
    }
    else if ($score >= 5) {
        echo "<p>Good Performance!</p>";
    }
    else {
        echo "<p>Keep Practising!</p>";
    }
    ?>

    <a href="index.html" class="btn">Try Again</a>

</div>

</body>
</html>
