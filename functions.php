<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        # This is the concept about Functions in PHP

        echo "Welcome to PHP function engine..<br>";

        # Creating a function
        function processMarks($marksArr){
            $sum = 0;
            foreach($marksArr as $value){
                $sum += $value;
            }
            return $sum;
        }

        $rohanDas = [34, 98, 45, 12, 98, 93];

        $sumMarks = processMarks($rohanDas);

        echo "Total Marks scored by Rohan out of 600 is: $sumMarks <br>";
    ?>
</body>
</html>