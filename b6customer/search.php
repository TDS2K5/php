<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<pre>
<form method="post">
Customer id to search: <input type="number" name="cid">

<br>
<input type="submit" name="search" value="Search customer">
<br>
<a href="index.php">Back to home</a>

</form>

<?php
    if(isset($_POST["search"])){
        try{
            require("methods.php");
            $cid=$_POST["cid"];
            display("SELECT * FROM customers WHERE cid=$cid");
        }catch(Exception $e){
        }
    }
?>

</pre>

</body>
</html>