<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">

        Enter a word : <br>
        <input type="text" name="word">
        <br>
        <input type="submit" name="submit" value="search">
        <br>

    </form>

    <?php

    $dict = array(
        "apple" => "red fruit",
        "banana" => "yellow K"
    );

    $result = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $word = strtolower(trim($_POST['word']));

        if (array_key_exists($word, $dict)) {
            $result = "Meaning is : " . $dict[$word];
            echo $result;
        } else {
            echo "Word not found";
        }
    }

    ?>

</body>

</html>