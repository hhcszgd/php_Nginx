<?php


function createTable($tableName){
	$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,"songDB");
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
	$sql = "CREATE TABLE " . $tableName . " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(64) NOT NULL,
	url VARCHAR(64) NOT NULL,
	size VARCHAR(50),
	reg_date TIMESTAMP
	)  ENGINE=InnoDB DEFAULT CHARSET=utf8";

	if ($conn->query($sql) === TRUE) {
	    echo "Table  created successfully";
	} else {
	    echo "创建数据表错误: " . $conn->error;
	}

$conn->close();
}


function dropTable($tableName){
	$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,"songDB");
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
	$sql = "DROP TABLE IF EXISTS " . $tableName;

	if ($conn->query($sql) === TRUE) {
	    echo "删表成功 successfully";
	} else {
	    echo "删表错误: " . $conn->error;
	}

$conn->close();
}







function dropDatabase($tableName){
	$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
	$sql = "DROP DATABASE" . $tableName;

	if ($conn->query($sql) === TRUE) {
	    echo "删ku成功 successfully";
	} else {
	    echo "删ku错误: " . $conn->error;
	}

$conn->close();
}







function createDatabase($dbName){
	$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
	

$sql = "CREATE DATABASE songDB  CHARACTER SET utf8 COLLATE utf8_general_ci";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();
}


?>
