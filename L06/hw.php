<?php

$x = 1 || 2 || 3;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}
echo '<br>','<br>';
?>

<!DOCTYPE html>

<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
        <style>
            p {
            font-family: Arial; 
            font-size: 15pt; 
            }
        </style>
    </head>
<body>
    <h1>Calculator</h1>
    <p>
    <?php 
    $number1 = (int)$_POST['number1'];
    $number2 = (int)$_POST['number2'];
    $sign = $_POST['sign'];
    switch($sign) {
    case "+":
        echo "Результат:" . "$number1" . "+" . "$number2" . "=" . $number1 + $number2;
        break;
      case "-":
        echo "Результат:" . "$number1" . "-" . "$number2" . "=" . $number1 - $number2;
        break;
      case "*":
        echo "Результат:" . "$number1" . "*" . "$number2" . "=" . $number1 * $number2;
        break;
      case "/":
        echo "Результат:" . "$number1" . "/" . "$number2" . "=" . $number1 / $number2;
        break;
    }
    ?>
    
    <form method="POST">
        <input  type="number" 
                size="10"
                name="number1" 
                value="<?= $number1 ?>"
                id="number-inpute">
        <input  type="text" 
                size="1"
                name="sign" 
                value="<?= $sign ?>"
                id="sign-inpute">
        <input  type="number" 
                size="10";
                name="number2" 
                value="<?= $number2 ?>"
                id="number-inpute">        
        <button type="submit">Calculate</button>
    </form>
    </p>
</body>
</html>

