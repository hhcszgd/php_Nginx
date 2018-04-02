<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === true){
	echo "数据库创建成功";
}else{
	echo "error creating database :" . $conn->error;
}
$conn->close();
?>
