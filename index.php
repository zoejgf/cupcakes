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
            <label><input type="checkbox" name="flavor[]" value="the grasshopper">The Grasshopper</label><br>
            <label><input type="checkbox" name="flavor[]" value="whiskey maple bacon">Whiskey Maple Bacon</label><br>
            <label><input type="checkbox" name="flavor[]" value="carrot walnut">Carrot Walnut</label><br>
            <label><input type="checkbox" name="flavor[]" value="salted caramel">Salted Caramel Cupcake</label><br>
            <label><input type="checkbox" name="flavor[]" value="red velvet">Red Velvet</label><br>
            <label><input type="checkbox" name="flavor[]" value="lemon drop">Lemon Drop</label><br>
            <label><input type="checkbox" name="flavor[]" value="tiramisu">Tiramisu</label><br>
        </p>
        <br>
        <input type="submit" value="Order">
    </form>
</body>
</html>