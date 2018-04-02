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

$sql = "UPDATE MyGuests SET firstname='小福海' WHERE firstname='法海' AND lastname='李'";
mysqli_query($conn , $sql);


if ($conn->query($sql) === TRUE){

	echo "更新成功";
}else{
	echo "error : " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
