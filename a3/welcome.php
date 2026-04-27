<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    session_start();

    echo "<h4> Welcome <h4>";
    echo $_SESSION['username'];
    echo "<h4> Your password is : <h4>";
    echo $_SESSION['password'];

    ?>

    <br>
    <button><a href="index.php">LOGOUT</a></button>
</body>


</html>