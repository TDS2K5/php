<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$con=new mysqli("localhost","root","","tan");

function addCustomer($cid,$cname, $item,$mobile) {
    global $con;
    $sql= "INSERT INTO customers VALUES($cid,'$cname','$item',$mobile)";
    $con->query($sql);
    echo "Customer added successfully";
}

function display($query){
    global $con;
    $result=$con->query($query);

    if($result->num_rows > 0){
        echo "<table border=1>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ITEM</th>
        <th>MOBILE</th>
        </tr>";
        
        while($row = $result->fetch_array()) {
            echo "
            <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            </tr>";
}
echo "</table>";

}else{
    echo "no records found";
}
}

function deleteCustomer($cid){
    global $con;
    $sql= "DELETE FROM customers WHERE cid=$cid";
    $con->query($sql);
    if($con->query($sql))
        echo"customer deleted successfully";
    else
        echo "$cid not found";
}
?>