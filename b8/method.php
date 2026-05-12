<?php 
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

$con = new mysqli("localhost","root","","tan");

function addHotel($roomNo,$roomType,$capacity){
    global $con;
    $sql = "INSERT INTO hotel VALUES('$roomNo','$roomType',$capacity,'available')";
    $con->query($sql);
    echo "Hotel added successfully";
}

function display($status){
    global $con;
    $result = $con->query("SELECT * FROM hotel WHERE status='$status'");

    if($result->num_rows > 0){
        echo "<table border=1>
        <tr>
            <th>Room No</th>
            <th>Room Type</th>
            <th>Capacity</th>
            <th>Status</th>
        </tr>";

        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>{$row['roomNo']}</td>
                <td>{$row['roomType']}</td>
                <td>{$row['capacity']}</td>
                <td>{$row['status']}</td>
            </tr>";
        }

        echo "</table>";
    }else{
        echo "No records found";
    }
}

function updateStatus($roomNo,$status){
    global $con;
    $sql = "UPDATE hotel SET status='$status' WHERE roomNo='$roomNo'";
    $con->query($sql);

    if($con->affected_rows > 0){    
        echo "Status updated";
    }else{
        echo "$roomNo Not found";
    }
}

function getStatus($roomNo){
    global $con;
    $sql = "SELECT status FROM hotel WHERE roomNo='$roomNo'";
    $result = $con->query($sql);

    if($result->num_rows > 0){  
        $r = $result->fetch_assoc();
        return $r['status'];
    }
    return "invalid";
}
?>