<?php 

require_once('con_db.php') ;


function pd($data){
	echo "<pre>" ;
	print_r($data) ;
	echo "</pre>" ;	
	die() ;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();

   
    $ip = $_SERVER['REMOTE_ADDR'];
    $count = '';

    $sql = "select * from user_tracking where ip = '".$ip."'" ;
    
    $result = mysqli_query($conn,$sql) ;
    while($row=mysqli_fetch_assoc($result)){
    	$ip=$row['ip'] ;
    	$count=$row['count'] ;
    	$count++ ;
    }

    $count_ip=mysqli_num_rows($result) ;

    if($count_ip > 0){
    	$sql = "update user_tracking set count = '".$count."' where ip ='".$ip."'" ;
    }
    else{
    	$sql = "insert into user_tracking (ip,count) values ('".$ip."','1')" ;
    }
    mysqli_query($conn,$sql) ;


    mysqli_close($conn);
    // mysql_query("INSERT INTO `database`.`table` (IP) VALUES ('$ip')");


  }	
    




?>