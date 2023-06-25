<?php

$nama       = $_POST['nama'];
$nis        = $_POST['nis'];
$asrama     = $_POST['asrama'];
$ka_kamar   = $_POST['ka_kamar'];


require_once 'connect.php';

$query = mysqli_query($connect,"INSERT INTO petugas VALUE('', '$nama', '$nis','$asrama', '$ka_kamar')")


?>