<!DOCTYPE html>
<html lang="en">
<head>
    <title> A Simple PHP Test Page</title>
</head>
<body>
    <h3>
        <?php 
        $first_nunmber = "27";

        $second_number = "3";

        $result = $first_nunmber + $second_number;

        echo "The sum of the inputs is $result <br />"; 
        
        $result = $first_nunmber - $second_number;

        echo "The difference of the inputs is $result <br />";

        $result = $first_nunmber / $second_number;
        
        echo "The division of the inputs is $result <br />";

        $result = $first_nunmber * $second_number;
        
        echo "The multiplication of the inputs is $result <br />";

        $result = $first_nunmber % $second_number;
        
        echo "The modulus of the inputs is $result <br />";
        ?>
    </h3>
</body>
</html>