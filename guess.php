<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number!</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>

    <?php 

    error_reporting(0);
    $guess = $_GET['guess'];
    $correct = 66;

    if (!isset($guess)) {
        echo "missing guess parameter!";
    }elseif (empty($guess)) {
        echo "your guess is too short!";
    }elseif (!is_numeric($guess)) {
        echo "your guess is not a number!";
    }elseif ($guess > $correct) {
        echo "your guess is too high";
    }elseif ($guess < $correct) {
        echo "your guess is too low";
    }elseif ($guess == $correct) {
        echo "congratulations! your guess " . $guess . " is correct!";
    }else {
    }

    ?>

</body>
</html>