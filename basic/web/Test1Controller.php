<?php
namespace app\Controller;
use yii\web\Controller;
class Test1Controller extends Controller{
	function test(){

	echo("hello world");
}
}
$bianliang = new Test1Controller();
$bianliang->test();


?>
