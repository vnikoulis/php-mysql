<?php
$host = 'mysql';
$user = 'user1';
$password = 'user1';
$db = 'my_db';

$link = new mysqli($host,$user,$password,$db);

if(!$link){
	echo 'Connection error';
}

echo 'Successfully connected '. mysqli_get_host_info($link);

?>