<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-size:18px;
            font-weight:bolder;
        }
    </style>
</head>
<body>

<form action="" method="post">
    <h1> Add room details </h1> 
    Room no : <input type="number" name="roomNo">
    Room type : 
    <select name="roomType">
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="semi">Semi</option>
        <option value="deluxe">Deluxe</option>
        <option value="dormitory">Dormitory</option>
    </select>

    Capacity : <input type="number" name="capacity">
    <button name="action" value="add">Add room</button>

    <h1> Check In Check Out </h1>
    Enter room number : <input type="text" name="rNo">
    <button name="action" value="booked">CheckIN</button>
    <button name="action" value="available">CheckOUT</button>
</form>

<?php
try{
    require("method.php");

    if(isset($_POST["action"])){
        $action = $_POST["action"];
        
        if($action == "add"){
            addHotel($_POST["roomNo"],$_POST["roomType"],$_POST["capacity"]);
        }else{
            $currentStatus = getStatus($_POST["rNo"]);

            if($currentStatus == $action){
                echo "Room is already taken";
            }elseif($currentStatus == "invalid"){
                echo "invalid room no";
            }else{
                updateStatus($_POST["rNo"],$action);
                echo "<br> Room status updated $action";
            }
        }
    }

    echo "<h2>Current Available room details :</h2>";
    display("available");
    echo "<h2>Current Booked room details :</h2>";
    display("booked");

}catch(Exception $e){
    if($e->getCode() == 1062)
        echo "Error : ".$e->getMessage();
}
?>

</body>
</html>