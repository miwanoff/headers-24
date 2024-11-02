<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
echo "<h1>About</h1>";
?>
    <p>Hello, <?= $_GET["name"];?>! You were born on <?= $_GET["date"];?>!</p>
</body>

</html>