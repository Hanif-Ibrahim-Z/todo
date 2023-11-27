<?php
include "config.php";
$ID = $_POST['id'];
$LIST = $_POST['list'];

mysqli_query($con,"UPDATE `todo` SET `list`='$LIST' WHERE `todo`. `id`= '$ID'");

header("location: index.php");
?>