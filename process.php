<!--
Name: Zoe Fortin
Date: 01/06/2023
URL: https://zfortin.greenriverdev.com/328/cupcakes/process.php
Program Description: process.php checks for empty variables, and gives
error messages according to variables that happen to be empty.
Otherwise, prints an order summary including the name provided as well
as the flavors chosen from the form.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Summary</title>
</head>
<body>
<?php
    if(empty($_POST['fname'])) {
        echo "<p>Please include your first name. Thank you</p>";
    } elseif(empty($_POST['flavor'])) {
        echo "<p>Please choose at least one flavor. Thank you</p>";
    } else {
        //if(isset($_POST['fname']) && isset($_POST['flavor'])) {
            $totalprice = 0;
            $cost = 3.50;
            echo "<h3>Thank you, " . $_POST['fname'] . ", for your order!</h3>";
            echo "<h4>Order Summary: </h4>";
            foreach($_POST['flavor'] as $flavor) {
                echo"<ul>";
                echo "<li>" . $flavor . "</li>";
                echo "</ul>";
                $totalprice = $totalprice + $cost;
            }
            echo "<h4>Order total: $" . $totalprice . "</h4>";
       // }
    }
?>
</body>
</html>