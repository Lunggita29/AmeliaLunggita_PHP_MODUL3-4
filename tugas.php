<?php
$nama = $_POST['nama'];
$password = $_POST['password'];
if($nama == "amel" && $password == "123"){
    echo "<h1> Login Berhasil </h1>";
} else {
    echo "<h1> Login Gagal </h1>";
}

?>