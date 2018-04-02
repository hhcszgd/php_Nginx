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
//echo "连接成功";
$sql = "SElect * FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0 ){
//	$result1 = $result->fetch_assoc(); 
//	echo $result1;
	$arr = array();
	while ($row = $result->fetch_assoc()){
		array_push($arr , $row);
//		echo "id:" . $row["id"] . "- name:" . $row["firstname" ] . "" . $row["lastname" ] . "<br>";
//		var_dump($row);	
	}
	echo json_encode($arr);
//	echo PHP_EOL;	

}else{

	echo "0 结果";
}
$conn->close();

?>
