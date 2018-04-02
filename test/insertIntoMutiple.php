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
$sql = "INSERT INTO MyGuests (firstname , lastname,email) VALUES ('firstName11' , 'lastName1' , 'email1');";
$sql .= "INSERT INTO MyGuests (firstname , lastname , email) VALUES ('firstname2' , 'lastName2' , 'email2');";
$sql .= "INSERT INTO MyGuests (firstname , lastname , email) VALUES ('firstname3' , 'lastName3' , 'email3')";
#$result = $conn->multi_query($sql);

#if ($result === TRUE){
if ( $conn->multi_query($sql) === TRUE){
	echo "插入成功";	

}else{

	echo "0 结果";
}
$conn->close();

?>
