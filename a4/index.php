<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4> BIRTHDAY CALCULATOR</h4>
    <h4> Enter your bday : </h4>

    <form action="" method="post">
        <input type="date" name="bday"><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $bday = $_POST["bday"];

        $date = new DateTime();

        $bd = new DateTime($bday);

        $diff = date_diff($date, $bd);

        echo "$diff->y , $diff->m , $diff->d";
    }
    ?>

</body>

</html>