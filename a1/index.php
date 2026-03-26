<html>

<head>
	<style>


	</style>
</head>

<body>


	<?php

	if (isset($_REQUEST["submit"])) {
		$name = $_POST["name"];
		$msg = $_POST["msg"];

		echo $name . "	" . $msg;
	} else {
		echo '
		<form action="" method="post">
		Name : <br>
		<input type="text" name="name">
		<br>
		<textarea name="msg"></textarea>
		<br>
		<input type="submit" name="submit">
	</form>';
	}

	?>

</body>

</html>