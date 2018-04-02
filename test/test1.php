<?php
$data = array(1 , 2 ,3 ,4 ,5 );
header('Content-type: text/json');
//echo json_encode($data);
$aaa = new a();

echo $aaa->aa(); 
class a {
	function aa(){
	$value1 = $_GET["key1"];
	$value2 = $_GET["key2"];
	echo $value1 + $value2 ;	
}
	function bb(){

	}
}
?>

