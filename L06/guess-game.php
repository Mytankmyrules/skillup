<?php

$number = (int)$_POST['number'];
$randomNumber = random_int(1,10);

$isSuccess = $number === $randomNumber;
?>
<!DOCTYPE html>

<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Guess-game</title>
    </head>
<body>
    <h1>Guess Game</h1>

    <?php if($isSuccess) : ?>
    <p>You are WINNER!</p>
    <?php else : ?>
    <p>You are LOOSER? your number is <?= $randomNumber ?></p>
    <?php endif ?>

    <form method="POST">
        <label for="number-input">Enter number from 1 to 10</label>
        <input type="number" 
                name="number" 
                min="1" 
                max="10"
                value="<?= $number ?>"
                id="number-inpute">

        <button type="submit">GUESS</button>
    </form>
</body>
</html>

