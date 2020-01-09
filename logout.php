<?php
session_start();
$_SESSION['usr']=false;
session_destroy();
unset($_SESSION['usr']);
header("location:index.php");
?>