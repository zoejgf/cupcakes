<!--
Name: Zoe Fortin
Date: 01/06/2023
URL: https://zfortin.greenriverdev.com/328/cupcakes/
Program Description: index.php consists of a cupcake fundraiser form that
collects a name and checked boxes of flavors in the form. The order button
submits to the process.php page.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form method="post" action="process.php">
        <p>
        Your name:<br>
        <input type="text" name="fname" placeholder="Please input your name">
        </p>
        <p>
            Cupcake Flavors:<br>
            <br>
            <label><input type="checkbox" name="flavor[]" value="The Grasshopper">The Grasshopper</label><br>
            <label><input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon">Whiskey Maple Bacon</label><br>
            <label><input type="checkbox" name="flavor[]" value="Carrot Walnut">Carrot Walnut</label><br>
            <label><input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake">Salted Caramel Cupcake</label><br>
            <label><input type="checkbox" name="flavor[]" value="Red Velvet">Red Velvet</label><br>
            <label><input type="checkbox" name="flavor[]" value="Lemon Drop">Lemon Drop</label><br>
            <label><input type="checkbox" name="flavor[]" value="Tiramisu">Tiramisu</label><br>
        </p>
        <br>
        <input type="submit" value="Order">
    </form>
</body>
</html>