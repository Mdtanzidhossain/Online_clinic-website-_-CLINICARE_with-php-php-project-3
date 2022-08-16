<?php

$data = $_GET['datavalue'];

$a = array('1000');
$b = array('3100');
$c = array('4000');
$d = array('6000');

$e = array('9000');
$f = array('5402');
$g = array('8000');
$h = array('2200');


if($data=="Dhaka"){
	foreach($a as $Dhaka){
		echo "<option> $Dhaka </option>";
	}
}

if($data=="Sylhet"){
	foreach($b as $Sylhet){
		echo "<option> $Sylhet </option>";
	}
}

if($data=="Chittagong"){
	foreach($c as $Chittagong){
		echo "<option> $Chittagong </option>";
	}
}


if($data=="Rajshahi"){
	foreach($d as $Rajshahi){
		echo "<option> $Rajshahi </option>";
	}
}

if($data=="Khulna"){
	foreach($e as $Khulna){
		echo "<option> $Khulna </option>";
	}
}


if($data=="Rongpur"){
	foreach($f as $Rongpur){
		echo "<option> $Rongpur </option>";
	}
}


if($data=="Barisal"){
	foreach($g as $Barisal){
		echo "<option> $Barisal </option>";
	}
}


if($data=="Mymensingh"){
	foreach($h as $Mymensingh){
		echo "<option> $Mymensingh </option>";
	}
}


?>