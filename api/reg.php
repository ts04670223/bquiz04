<?php include_once "../base.php";

$_POST['regdate']=date("Y-m-d");
// echo $_POST['regdate'];
$Mem->save($_POST);


?>