<?php include_once "../base.php";

$acc=$_GET['acc'];
$chk=$Mem->find(['acc'=>$acc]);
if(!empty($chk)){
    echo 1;
}else{
    echo 0;
}

?>