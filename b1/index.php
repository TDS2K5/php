<html>

<head>
    <title>Student Registration Form</title>
</head>

<body>
    <h2>Student Registration Form</h2>
    <form method="post" action="new.php">
        <pre>
        First Name : <input type="text" name="fname" required="required" /><br /><br />
        Last Name : <input type="text" name="lname" required="required" /><br /><br />
        Address : <br /><textarea required="required" name="address"></textarea><br /><br >
        Email : <input type="email" name="email" required="required" /><br /><br />
        Mobile : <input type="text" name="mobile" required="required" maxlength="10" /><br /><br />
        City : <input type="text" name="city" required="required" /><br /> <br />
        State : <input type="text" name="state" required="required" /><br /><br />
        Gender : <br><input type="radio" name="gender" value="Male" required="required" />Male
        <input type="radio" name="gender" value="Female" required="required" />Female<br /><br />
        Hobbies : <br /><input type="checkbox" name="hobbies[]" value="Reading" />Reading<br />
        <input type="checkbox" name="hobbies[]" value="Writing" />Writing<br />
        <input type="checkbox" name="hobbies[]" value="Drawing" />Drawing<br /><br />
        Blood Group :<select name="bg" required>
            <option value="" disabled="disabled" selected="selected"> Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br /><br />
        <input type="submit" value="Submit" />
</pre>
    </form>
</body>

</html>

</body>

</html>