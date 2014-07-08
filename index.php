<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>

	<?php require 'logic.php'; ?>

</head>

<body>

	<form method='POST' action='index.php'>
		
		<input type="checkbox" name="lower_case">Lower Case (a to z)<br>

		<input type="checkbox" name="upper_case">Upper Case (A to Z)<br>

		<input type="checkbox" name="numbers">Numbers (0 to 9)<br>

		<input type="checkbox" name="symbols">Symbols (-+=_[]{}:;,./?!@$#*%<>)<br>

		Password Length: <input type="text" name="length">

		<input type="submit" value="Generate">  

	</form>

	 This is your Password: <?echo $passwd?>




</body>

</html>
