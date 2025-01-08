<?php 
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$db = "nilaimahasiswa"; 

$conn = mysqli_connect($host, $user, $password, $db); 

if (mysqli_connect_errno()) { 
    echo "koneksi gagal" . mysqli_connect_error();
}
?>