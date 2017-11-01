<?php


$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect($db);

if(! $conn ){
  die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';
$sql = 'CREATE Database ecommerce_db';
$retval = mysql_query( $sql, $conn );

if(! $retval ){
  die('Could not create database: ' . mysql_error());
}

echo "Database ecommerce_db created successfully";

mysql_close($conn);

?>
