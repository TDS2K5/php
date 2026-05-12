<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Customer Management</h1>
<pre>
<form method="post">
    <button name="action" value="add.php">ADD</button>
    <button name="action" value="delete.php">DELETE</button>
    <button name="action" value="search.php">SEARCH</button>
    <button name="action" value="sort">SORT</button>
    <button name="action" value="display">DISPLAY</button>
</form>

<?php
 if(isset($_POST["action"])) {
    try{
        require("methods.php");
        $action = $_POST["action"];
        
        if($action == "sort") {
            display("SELECT * FROM customers order by cid");
    }elseif($action == "display") {
        display("SELECT * FROM customers");
 }else{
    header("Location:$action");
 }
 }catch(Exception $e){
    echo $e->getMessage();
 }
    }
?>

</pre>
    
</body>
</html>