<?php

$lower_case = "abcdefghijklmnopqrstuvwxyz";
$upper_case = strtoupper($lower_case);
$numbers = "0123456789";
$symbols = "-+=_[]{}:;,./?!@$#*%<>";
$characters = "";

if (isset($_POST['length'])){
    
    if (isset($_POST['lower_case']) && $_POST['lower_case'] == 'on')
        $characters .= $lower_case;
     
    if (isset($_POST['upper_case']) && $_POST['upper_case'] == 'on')
        $characters .= $upper_case;
     
    if (isset($_POST['upper_case']) && $_POST['upper_case'] == 'on')
        $characters .= $upper_case;
     
    if (isset($_POST['symbols']) && $_POST['symbols'] == 'on')
        $characters .= $symbols;
     
    $length = $_POST['length'];
} else {
	$characters = $lower_case . $upper_case . $numbers . $symbols;
	$length = 15;
}

$string_length = strlen($characters)
$passwd = '';

for ($i = 0; $i < $length; $i++) {
	$passwd .= substr($characters, rand(0, $length - 1), 1);
}

$passwd = str_shuffle($passwd);