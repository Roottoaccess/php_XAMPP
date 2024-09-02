<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF_ELSE_CONDITIONAL</title>
</head>
<body>
    <?php
    # IF ELSE conditional statement....
        $a = 665;
        $b = 9;

        if($a > 78){
            echo "a is greater than 78..";
        } else {
            echo "a is not greater than 78..";
        }

        # Creating a voting system
        # If else ladder system
        $age = 54;
        echo "<br>";
        # The logic behind it
        if($age >= 18){
            echo "You can definately vote....";
        } elseif($age < 18) {
            echo "You cannot vote till you got 18 or above....";
        } else{
            echo "Please give a value to your variable.....";
        }

        echo "<br>Done !";
    ?>
</body>
</html>