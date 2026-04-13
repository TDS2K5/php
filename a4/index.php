<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <h4>Operation on two nos</h4>
        <input type="number" name="n1" required> <br>

        <select name="op" required>
            <option value="plus">+</option>
            <option value="min">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <br>
        <input type="number" name="n2" required> <br>
        <input type="submit" name="submit"> <br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];


        switch ($op) {
            case 'plus':
                $res = $n1 + $n2;
                echo "$n1 + $n2 = $res";
                break;
            case "min":
                $res = $n1 - $n2;
                break;
            case "mul":
                $res = $n1 * $n2;
                break;
            case "div":
                $res = $n1 / $n2;
                break;
            default:
                $res = "invalid <br>";

        }

    }
    ?>


</body>

</html>