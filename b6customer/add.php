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
Customer id : <input type="number" name="cid">
Name : <input type="text" name="cname">
Item : <input type="text" name="item">
Mobile : <input type="tel" name="mobile">
<br>
<input type="submit" name="save" value="Add customer">
<br>
<a href="index.php">Back to home</a>

</form>

<?php
    if(isset($_POST["save"])){
        try{
            require("methods.php");

            addCustomer($_POST["cid"], $_POST["cname"], $_POST["item"],$_POST["mobile"]);
        }catch(Exception $e){
        }
    }
?>

</pre>

</body>
</html>