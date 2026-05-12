<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<strong>First Name:</strong>" . $_POST['fname'] . "<br>";
    echo "<strong>Last Name:</strong>" . $_POST['lname'] . "<br>";
    echo "<strong>Address:</strong>" . $_POST['address'] . "<br>";
    echo "<strong>Email:</strong>" . $_POST['email'] . "<br>";
    echo "<strong>Mobile:</strong>" . $_POST['mobile'] . "<br>";
    echo "<strong>City:</strong>" . $_POST['city'] . "<br>";
    echo "<strong>State:</strong>" . $_POST['state'] . "<br>";
    echo "<strong>Gender:</strong>" . $_POST['gender'] . "<br>";
    echo "<strong>Hobbies:</strong>";
    if (isset($_POST['hobbies'])) {
        echo implode(",", $_POST['hobbies']) . "<br>";
    } else {
        echo "No hobbies selected.<br>";
    }
    echo "<strong>Blood Group:</strong>" . $_POST['bg'] . "<br>";
} ?>