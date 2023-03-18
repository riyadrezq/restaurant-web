<?php
$servername='localhost';
$username='root';
$password="";
$dbname='store';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno()){
	echo "Faild to connect";
	exit();
}
// echo "Connection_seccuss";

?>