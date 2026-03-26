<html>

<body>
    <form action="" method="post">
        <h3> LOGIN </h3>

        <br> Username : <input type="text" name="username" required> <br>
        <br> Password : <input type="password" name="password" required> <br>
        <br> <input type="submit" name="submit" value="submit"> <br>

    </form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    header("Location:welcome.php");

    exit();

}
?>

</html>