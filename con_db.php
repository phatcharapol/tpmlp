<?php 

$server='127.0.0.1';
$user='root' ;
$pass='' ;
$db='tpmlp';


$conn = mysqli_connect($server,$user,$pass,$db);

if (mysqli_connect_errno()){
		echo "Database Connect Failed : " . mysqli_connect_error();
		die();
}


?>