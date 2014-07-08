<?php

$lower_case = array("this", "that", "the", "third");
$symbols = array("-", "+", "=", "_", "[", "]", "{", "}", ":", ";", ",", ".", "/", "?", "!", "@", "$", "#", "*", "%", "<", ">");
$passwd;


for ($i = 0; $i < $_POST[length]; $i++) {
	$passwd .= $lower_case[rand(0,3)];
}

if ($_POST['upper_case'] == 'on') {
	$passwd .= strtoupper($passwd);
}

if ($_POST['numbers'] == 'on') {
	$passwd .= rand(0,9); 
}

if ($_POST['symbols'] == 'on') {
	$passwd .= $symbols[rand(0,24)];
}


//This works in attempts of not using arrays and being simple but I think I may have misunderstood the assignment slightly in that it needs to have pronounceable words which wasn't clear at all in the assignment.
//$lower_case = "abcdefghijklmnopqrstuvwxyz";
//$upper_case = strtoupper($lower_case);
//$numbers = "0123456789";
//$symbols = "-+=_[]{}:;,./?!@$#*%<>";
//$characters = "";

// if (isset($_POST['length'])){
    
//     if (isset($_POST['lower_case']) && $_POST['lower_case'] == 'on')
//         $characters .= $lower_case;
     
//     if (isset($_POST['upper_case']) && $_POST['upper_case'] == 'on')
//         $characters .= $upper_case;
     
//     if (isset($_POST['numbers']) && $_POST['numbers'] == 'on')
//         $characters .= $numbers;
     
//     if (isset($_POST['symbols']) && $_POST['symbols'] == 'on')
//         $characters .= $symbols;
     
//     $length = $_POST['length'];
// } else {
// 	$characters = $lower_case . $upper_case . $numbers . $symbols;
// 	$length = 15;
// }

// $string_length = strlen($characters);
// $passwd = '';

// for ($i = 0; $i < $length; $i++) {
// 	$passwd .= substr($characters, rand(0, $length - 1), 1);
// }

// $passwd = str_shuffle($passwd);

?>