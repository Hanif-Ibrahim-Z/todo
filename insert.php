<?php
$LIST = $_POST['list'];
include "config.php";
mysqli_query($con,"INSERT INTO `todo`(`list`) VALUES ('$LIST')");
// menentukan halaman mana yg dituju setelah data yg dikirim
header("location:index.php")
?>