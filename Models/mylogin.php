<?php
include_once 'database.class.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
$con=new dataBase('localhost', 'paystore1', 'root','');
$con->setTable('customer');
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];
    $data = $con->select(array('id', 'name'), array('email','password'), array($email,$pass));
    var_dump($data);


//header("location:../Views/login.php");
}
?>