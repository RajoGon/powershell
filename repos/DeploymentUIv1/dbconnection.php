
<?php

$_SESSION["connection"]="disconnected";
	$serverName = "deploymentmetadata.database.windows.net"; //serverName\instanceName, portNumber (default is 1433)
	$connectionInfo = array( "Database"=>"deploymentmetadatadb", "UID"=>"SQLAdmin", "PWD"=>"MyPassword@123");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	if( $conn ) {
		$_SESSION["connection"]=$conn;
	}else{
	     die( print_r( sqlsrv_errors(), true));
	     $_SESSION["connection"]="disconnected";
	}

?>