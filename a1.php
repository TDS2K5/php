<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	echo "<h2>Form Submission Result</h2>";
	$name=$_POST["name"];
	$email=$_POST["email"];
	$msg=$_POST["msg"];
	echo "<strong>Name :</strong> $name <br><br>
	<strong>Email :</strong> $email <br><br>
	<strong>Message :</strong> $msg <br><br>";
}else{
	echo "<h2>Contact Form</h2>
	<form action='' method='post'>
	Name : <br /> <input type='text' name='name' required='required'/><br /><br />
	Email : <br /> <input type='text' name='email' required='required'/><br /><br />
	Message : <br /> <textarea name='msg' rows='4' required='required'/></textarea> <br /><br />
	<input type='submit' value='Submit'/>
	</form>";
}
?></body>
</html>