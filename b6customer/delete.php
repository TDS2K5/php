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
Customer id to delete: <input type="number" name="cid">

<br>
<input type="submit" name="delete" value="Delete customer">
<br>
<a href="index.php">Back to home</a>

</form>

<?php
    if(isset($_POST["delete"])){
        try{
            require("methods.php");

            deleteCustomer($_POST["cid"]);
        }catch(Exception $e){
        }
    }
?>

</pre>

</body>
</html>