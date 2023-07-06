<?php
session_start();
session_destroy();
header("location:../login_land1.php");
exit;
?>