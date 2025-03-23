<?php 

$hostname = "localhost:3306";
$username = "root";
$password = "";
$database_name = "farmin";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db -> connect_error){
    echo "koneksi error!";
    die("error!");
}

?>