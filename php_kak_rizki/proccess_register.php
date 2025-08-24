<?php
require_once('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$query = mysqli_query($conn, $sql);

    

if($query){
    echo "<script>
            alert('Berhasil Register');
            document.location.href='register.php'
            </script>";

}else{
    echo "tidak berhasil terkirim";
}



?>