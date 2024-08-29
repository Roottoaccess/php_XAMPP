<!-- This is a PHP variable concept -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variables</title>
</head>
<body>
    Enter the first number: <input type="number" name="num1" id="num1">
    <br><br>
    Enter the second number:<input type="number" name="num2" id="num2">
    <br> <hr>
    <?php
        # Variables in PHP
        $num1 = 15;
        $num2 = 24;

        # Now printing the result
        $sum = $num1 + $num2;

        # Printing the variable
        print("The result of the addition of (15 + 24) is: $sum");
    ?>
    <h3>Rules for defining the PHP variables..</h3>
    <ul>
        <li>Start with a $ sign</li>
        <li>Cannot start with numbers</li>
        <li>Can only contain alphanumeric characters and underscores</li>

        <?php // $name ="Jeet"; echo "$name" ?>

        <li>Variables are case sensetive..</li>
    </ul>
</body>
</html>