<?php 
$tU=$_POST['txtUser'];
$tP=$_POST['txtPassword'];
$RchkU=$_POST['chkU'];
$RchkC=$_POST['chkC'];
echo $RchkC;
echo $RchkU;
if($RchkU=='on'){
    setcookie('tU',$tU,time()+3600);
}
if($RchkC=='on'){
    setcookie('tP',$tP,time()+3600);
}


 ?>