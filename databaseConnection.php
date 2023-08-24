<?php 
function connect(){
$host = 'localhost';
$user = 'root';
$pass = '';
$databaseName = 'baby_shop';

$connect = new mysqli($host, $user, $pass, $databaseName);
return $connect;
 
echo "connected";
}
?>