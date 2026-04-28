<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Word frequency analyzer</h3>

    <form action="" method="post">
        <pre>
        Enter a string : <input type="text" name="text">
        <input type="submit" name="submit" value="analyze">
        </pre>
    </form>

    <?php

    function sortWordCount($array, $order)
    {
        if ($order == 'asc')
            ksort($array);
        else
            krsort($array);
        return $array;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $text = strtolower($_POST['text']);
        $words = str_word_count($text, 1);
        $wordc = array_count_values($words);
        arsort($wordc);

        echo "<h3> Word Frequency </h3>";
        foreach ($wordc as $word => $count) {
            echo " $word : $count <br>  ";
        }

        reset($wordc);
        $most = key($wordc);
        echo "<h3> Most used word : $most </h3>";
        echo "$wordc[$most] times";

        reset($wordc);
        asort($wordc);
        $least = key($wordc);
        echo "<h3> Least used word : $least </h3>";
        echo "$wordc[$least] times <br>";



        echo "
        <form method='post' action=''>
        <pre>
        <input type = 'hidden' name='text' value='$text'>
        <input type = 'hidden' name='sorted' value='asc'>
        <input type = 'submit' value='Sort Ascending'>
        </pre>
        </form>
        <br>";


        echo "
        <form method='post' action=''>
        <pre>
        <input type='hidden' name='text' value='$text'>
        <input type='hidden' name='sorted' value='desc'>
        <input type='submit' value='Sort descending'>
        </pre>
        </form>
        ";

        if (isset($_POST['sorted'])) {
            $sorted = $_POST['sorted'];

            $wordc = sortWordCount($wordc, $sorted);
            echo "<h3> Sorted Word count ($sorted) : </h3>";
            foreach ($wordc as $word => $count) {
                echo " $word : $count <br>  ";
            }
        }


    }
    ?>


</body>

</html>