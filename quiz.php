
<?php
$questions = [
    "Which language is used to create web pages?",
    "What does HTML stand for?",
    "Which language is used for styling web pages?",
    "Which symbol is used for PHP variables?",
    "Which tag is used for a paragraph?",
    "Which language adds interactivity to websites?",
    "Which database is commonly used with PHP?",
    "Which tag is used to create a hyperlink?",
    "What does CSS stand for?",
    "Which software is used to run PHP locally?"
];

$options = [
    ["HTML", "Python", "Java", "C"],
    ["Hyper Text Markup Language", "High Text Machine Language", "Hyper Tool Markup Language", "None"],
    ["CSS", "PHP", "SQL", "C"],
    ["$", "#", "@", "&"],
    ["<p>", "<h1>", "<br>", "<hr>"],
    ["JavaScript", "HTML", "CSS", "SQL"],
    ["MySQL", "MS Word", "Excel", "Paint"],
    ["<a>", "<p>", "<img>", "<br>"],
    ["Cascading Style Sheets", "Computer Style Sheets", "Creative Style System", "None"],
    ["WAMP", "Photoshop", "Notepad", "Paint"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Questions</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">

    <h1>Online Quiz</h1>

    <form action="result.php" method="post" onsubmit="return validateQuiz()">

    <?php
    for ($i = 0; $i < count($questions); $i++) {
    ?>

        <div class="question">

            <h3><?php echo ($i + 1) . ". " . $questions[$i]; ?></h3>

            <?php
            for ($j = 0; $j < 4; $j++) {
            ?>

                <label>
                    <input type="radio"
                    name="q<?php echo $i; ?>"
                    value="<?php echo $j; ?>">

                    <?php echo htmlspecialchars($options[$i][$j]); ?>
                </label>
                <br>

            <?php
            }
            ?>

        </div>

    <?php
    }
    ?>

    <button type="submit" class="btn">Submit Quiz</button>

    </form>

</div>

</body>
</html>
