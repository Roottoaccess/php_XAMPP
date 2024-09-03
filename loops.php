<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops concept in PHP scripting</title>
</head>
<body>
    <?php
    # While Loop----
        // echo "While loops in php";
        // $num = 1;
        // echo "<br>";
        // while($num <= 500){
        //     echo "The value is: ";
        //     echo "$num <br>";
        //     $num ++;
        // }

    # For Loop-------
        // for($i = 1; $i <= 10; $i++){
        //     #Code..
        //     echo "The number is: $i <br>";
        // }

        # Avoid running infinite loops
        // for ($i=0; $i < ; $i++) { 
        //     # code...
        //     echo $i;
        // }

            // echo "For loop has ended";

    # Do While Loop-----
        // echo "Welcome to Do While Loop <br>";

        // $i = 1;
        // do{
        //     echo "The number is $i <br>";
        //     $i++;
        // }while($i <= 5);

    # For Each Loop-----
        echo "Welcome to for each loop.... <br>";

        $arr = array("bananas","apples","Harpic","Bread");

        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i];
            echo "<br>";
        }
        echo "This is done be foreach loop..<br>";

        # Better way to do it is foreach loop
        foreach ($arr as $value) {
            # code...
            echo $value;
            echo "<br>";
        }
    ?>
</body>
</html>