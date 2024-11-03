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
        echo $_POST['in'][$i] . '<br/>';
    }
    $result_answer = $_POST['answer'];
    if ($_POST['answer'] === "yes") {
        $result_answer = "Так!";
    }

    if ($_POST['answer'] === "no") {
        $result_answer = "Ні!";
    }

    echo "<p><b>" . $result_answer . "</b></p>";
    $course = $_POST['course'];
    echo "$course<br>";
    $courses = $_POST['courses'];
    foreach ($courses as $item) {
        echo "$item<br>";
    }
    echo "technologies:<br/>";
    $technologies = $_POST['technologies'];
    foreach ($technologies as $item) {
        echo "$item<br />";
    }

}
?>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="in[]" value="1"><br />
        <input type="text" name="in[]" value="2"><br />
        <input type="text" name="in[]" value="3"><br />
        <input type="radio" name="answer" value="yes" checked>yes<br />
        <input type="radio" name="answer" value="no">no<br />
        <select name="course" size="1">
            <option value="ASP.NET">ASP.NET</option>
            <option value="PHP">PHP</option>
            <option value="Ruby">RUBY</option>
            <option value="Python">Python</option>
        </select><br />
        <label for='courses[]'>Виберіть курс: </label> <br />
        <select name="courses[]" size="4" multiple="multiple">
            <option value="ASP.NET">ASP.NET</option>
            <option value="PHP">PHP</option>
            <option value="Ruby">RUBY</option>
            <option value="Python">Python</option>
        </select><br />
        ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" />
        PHP: <input type="checkbox" name="technologies[]" value="PHP" />
        RUBY: <input type="checkbox" name="technologies[]" value="Ruby" /><br />

        <input type="submit" name="submit" value="Submit Data" />
    </form>
</body>

</html>