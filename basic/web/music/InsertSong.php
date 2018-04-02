<?php


function insertSong($name , $url , $size , $tableName){
$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,"songDB");
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
// echo "连接成功";




$sql = "INSERT INTO " . $tableName .  "(name , url , size ) VALUES ( " . "\"" . $name . "\" ,"  . "\"" . $url . "\" ," . "\"" . $size . "\" )";
if ($conn->query($sql) === TRUE){
	echo "插入成功";
	exit();
}else{
	echo "error : " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>
