
<?php
$serverName = "LAPTOP-O7MSCG4B\\SQLEXPRESS"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"crud_toko");
$koneksi = sqlsrv_connect( $serverName, $connectionInfo);

if( $koneksi ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>