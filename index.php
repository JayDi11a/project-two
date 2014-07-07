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
