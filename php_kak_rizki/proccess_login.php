<?php
require_once('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

//Cari user di database
$sql = "SELECT * users WHERE username='$username'";
$query = mysqli_query($conn, $sql);
//cek apakah ada data yang ditemukan atau tidak
$cek = mysqli_fetch_array($query);

echo $cek['username'];

// if($cek['username'] >= 1){
//     echo "1 Data ditemukan";
// }else{
//     echo "Tidak ada data ditemukan";
// }

?>