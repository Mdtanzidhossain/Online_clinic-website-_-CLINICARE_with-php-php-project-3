<?php
include('config.php');
include('api.php');
$arr['topic']='Video Call';
$arr['start_date']=date('2022-01-23 00:02:40');
$arr['duration']=15;
$arr['password']='1234';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Password: ".$result->password."<br/>";
	echo "Start Time: ".$result->start_time."<br/>";
	echo "Duration: ".$result->duration."<br/>";
}else{
	echo '<pre>';
	print_r($result);
}
?>
