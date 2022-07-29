<?php
$Username = $_POST["username"];
$Password = $_POST["password"];

$query_sql = "SELECT * FROM user
                        WHERE Username = '$Username' AND password = '$Password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
      echo "<h1>Selamat Datang, ".$Username."!</h1>";
}else{
      echo "<h2>Username atau Password Salah!</h2>";
}
?>