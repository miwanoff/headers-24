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
    <p>Hello, <?= $_REQUEST["name"];?>! You were born on <?= $_REQUEST["date"];?>!</p>
</body>

</html>