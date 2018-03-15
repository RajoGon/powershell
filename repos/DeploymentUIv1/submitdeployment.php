<?php
// Establishing connection with server by passing "server_name", "user_id", "password".
include('dbconnection.php');
// Selecting Database by passing "database_name" and above connection variable.

$pattern2=$_POST['pattern1']; // Fetching Values from URL
$tshirt2=$_POST['tshirt1'];
$region2=$_POST['region1'];
$environment2=$_POST['environment1'];
$engcode2=$_POST['engcode1'];
$username=$_POST['username'];
$sql = "INSERT INTO dbo.USER_DEPLOYMENT (Pattern, TShirtSize,Region,Environment,EngagementCode,RequestedDate,UserName) VALUES (?,?,?,?,?,?,?)";
$params = array($pattern2, $tshirt2,$region2,$environment2,$engcode2,date(DATE_ATOM),$username);
$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}else{
	echo '("Data Submitted succesfully")';
}
?>