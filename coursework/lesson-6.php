<?php
    $radius = 25;
    $pi = 3.14;

    // basic operators - *, /, +, -, **

    echo $pi = $radius**2;

    // order of operations (BIDMAS)

    echo 2 * (4 + 5) / 3;

    // increment & decrement operators

    echo $radius++;
    echo $pi--;

    // shorthand operations

    $age = 20;
    $age += 10;
    $age -= 5;
    $age *= 2;

    echo $age;

    // number functions

    echo floor($pi);
    echo ceil($pi);
    echo pi();

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
    <body>
        <p><?php echo $age; ?></p>
    </body>
</head>
</html>
