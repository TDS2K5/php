<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">
        Enter string : <input type="text" name="st" /><br /><br />
        <input type="submit" name="glength" value="Get Length" />
        <input type="submit" name="reverse" value="Reverse" />
        <input type="submit" name="upper" value="Uppercase" />
        <input type="submit" name="lower" value="Lowercase" />
        <input type="submit" name="replace" value="Replace" />
        <input type="submit" name="checkp" value="Check Palindrome" />
        <input type="submit" name="shuffle" value="Shuffle" />
        <input type="submit" name="wordc" value="Word count" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $st = $_POST['st'];

        if ($_POST['glength']) {
            echo "length of string : " . strlen($st);
        }


        if ($_POST['reverse']) {
            echo "reverse of string : " . strrev($st);
        }


        if ($_POST['upper']) {
            echo "uppercase of string : " . strtoupper($st);
        }


        if ($_POST['lower']) {
            echo "lowercase of string : " . strtolower($st);
        }


        if ($_POST['replace']) {
            echo "replaced string : " . str_replace('a', 'x', $st);
        }


        if ($_POST['checkp']) {
            if (strrev($st) === $st)
                echo "$st is palindrome ";
            else
                echo "$st is not a palindrome";
        }


        if ($_POST['shuffle']) {
            echo "shuffled string : " . str_shuffle($st);
        }

        if ($_POST['wordc']) {
            echo "word count of string : " . str_word_count($st);
        }

    }
    ?>

</body>

</html>