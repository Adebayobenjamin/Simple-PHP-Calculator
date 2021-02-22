<?php
$answer = '';
    if(isset($_GET['calculate'])){
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $operation = $_GET['operation'];
        switch($operation){
            case "add":
                $answer = $number1 + $number2;
                break;
            case "subtract":
                $answer = $number1 - $number2;
                break;
            case "multiply":
                $answer = $number1 * $number2;
                break;
            case "divide":
                if($number2 == 0){
                    $answer = "undefined";
                }else{
                    $answer = $number1 / $number2;
                }
                
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
</head>
<body>
    <form action="" method="get">
    <h2>Simple Calculator</h2>
        <input type="number" name="number1" placeholder="Enter first Number" required>
        <input type="number" name="number2" placeholder="Enter second Number" required>
        <select name="operation" placeholder="Choose Operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <button name="calculate">Calculate</button>
    </form>
    <!-- Output Answer -->
    <span id="answer"> Your Answer is: <?= $answer?></span>
</body>
</html>