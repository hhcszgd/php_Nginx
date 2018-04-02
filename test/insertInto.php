<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,"myDB");
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";

$sql = "INSERT INTO MyGuests (firstname , lastname , email ) VALUES ('John' , 'Doe' , 'john@example.com')";
if ($conn->query($sql) === TRUE){
	echo "插入成功";
}else{
	echo "error : " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
