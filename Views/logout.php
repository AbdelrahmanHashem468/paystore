<?php
session_start();

$_SESSION = array();

session_destroy();

echo "<script> window.location.assign('index.php'); </script>";