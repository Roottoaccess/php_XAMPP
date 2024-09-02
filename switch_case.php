<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case Statements</title>
</head>
<body>
    <?php 
        $age = 67;

        switch($age){
            case 12:
                echo "You entered 12";
                break;
            
            case 45:
                echo "You entered 45";
                break;
                
            case 67:
                echo "You entered 56";
                break;
            
            default:
                echo "You entered weird";
        }
    ?>
</body>
</html>