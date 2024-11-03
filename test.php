<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
if (isset($_POST['submit'])) {
    print_r($_POST);
    for ($i = 0; $i < count($_POST['in']); $i++) {
        echo $_POST['in'][$i] . '<br/>';    }
        $result_answer = $_POST['answer'];
        if ($_POST['answer'] === "yes")
           $result_answer = "Так!";
        if ($_POST['answer'] === "no")
           $result_answer = "Ні!";
        echo "<p><b>".$result_answer."</b></p>";
}
?>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="in[]" value="1">
        <input type="text" name="in[]" value="2">
        <input type="text" name="in[]" value="3">
        <input type="radio" name="answer" value="yes" checked>yes<br />
        <input type="radio" name="answer" value="no">no<br />
        <input type="submit" name="submit" value="Submit Data" />
    </form>
</body>

</html>